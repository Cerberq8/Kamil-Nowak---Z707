<?php
// The amounts of products to show on each page
  $num_products_on_each_page = 4;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
  $current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
  $stmt = $pdo->prepare('SELECT * FROM Jachty WHERE sold = 0 ORDER BY date_added DESC LIMIT ?,?');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
  $stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
  $stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
  $stmt->execute();
// Fetch the products from the database and return the result as an Array
  $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of products
  $total_products = $pdo->query('SELECT * FROM Jachty WHERE sold = 0')->rowCount();
?>

<?=template_header('Products')?>

<section class="product">
    <h2 class="product-category"><?=$total_products?> Products</h2>
    <div class="product-container">
    <?php foreach ($products as $product): ?>
        <div class="product-card">
          <div class="product-image">
          <a href="index.php?page=product&id=<?=$product['IDJachtu']?>" class="product-image">
          <img src="images/<?=$product['img']?>"  class="product-thumb" alt="" />  
          <button class="card-btn">Rent</button>
          </div>
          <div class="product-info">
            <h2 class="product-brand"><?=$product['nazwa_jachtu']?></h2>
            <span class="price"><?=$product['cena_wynajmu']?> zł/day </span>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
</section>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=products_rent&p=<?=$current_page-1?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=products_rent&p=<?=$current_page+1?>">Next</a>
        <?php endif; ?>
    </div>

<?=template_footer()?>