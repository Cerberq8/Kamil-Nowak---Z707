<?php
// Get the 4 most recently added products
    $stmt = $pdo->prepare('SELECT * FROM jachty ORDER BY date_added DESC LIMIT 4');
    $stmt->execute();
    $recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>
 
    <!-- Hero Section -->
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1>YEACHTS</h1>
                <h2>WITH SOUL</h2>
                <p>Set sail to your own haven</p>
                <button class="main__btn"><a href="index.php?page=products">Get Started</a></button>
            </div>
            <img src="images/pic1.svg" alt="pic" id="main__img">
        </div>
    </div>

    <!-- Services Section -->
    <div class="services">
        <h1>Your journey starts here</h1>
        <div class="services__container">
            <div class="services__card">
                <h2>Experience a moment of bliss</h2>
                <p>Rent and sail our Yeacht!</p>
                <li class="services__btn">
                  <a href="index.php?page=products_rent" class="button">
                      Rent
                  </a>
              </li>
            </div>
            <div class="services__card">
                <h2>Make your dream come true</h2>
                <p>Buy your own Yeacht!</p>
                <li class="services__btn">
                  <a href="index.php?page=products_buy" class="button">
                      Buy
                  </a>
              </li>
            </div>
        </div>
    </div>

 
<?=template_footer()?> 