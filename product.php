<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM Jachty WHERE IDJachtu = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
?>

<?=template_header('single-product')?>

<div class="single-product content-wrapper">
    <img src="images/<?=$product['img']?>" width="300" height="300" alt="<?=$product['nazwa_jachtu']?>">
    <div>
        <h1 class="name"><?=$product['nazwa_jachtu']?></h1>
        <span class="price">
            <?=$product['cena_kupna']?> zł
        </span>
       
        <div class="description">
        Year of production: <?=$product['rok_budowy']?> r.
        </div>
        
        <div class="description">
        Number of cabins: <?=$product['pomieszczenia']?> 
        </div>        
        
        <div class="description">
        Weight: <?=$product['waga_kg']?> kg
        </div>        
        
        <div class="description">
        Engine power: <?=$product['moc_silnika_kM']?> KM
        </div>

        <form action="index.php?page=cart" method="post">
            <input type="hidden" name="product_id" value="<?=$product['IDJachtu']?>"> 
            <input type="submit" value="Buy">
        </form>
    </div>
</div>

<?=template_footer()?>