<?php
require_once "../config/connexion.php";
require_once "../functions/userCrud.php";
require_once "../products/productCrud.php";

session_start();
$allproducts = getAllProducts();


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="../styles/product.css">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link " href="../index.php">Accueil</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link " href="./products.php">Produits</a>
            </li>
        </ul>
    </div>
</nav>
<style>
    body {
        background-image: url('../Saved\ Pictures/newback.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
    }
</style>
<form action="./modifyProduct.php" method="post">
    <h2>Choisissez Le Produit</h2>
    <select name="name">

        <?php foreach ($allproducts as $product) { ?>
            <option>
                <?php echo $product['name'] ?>
            </option>
        <?php } ?>

    </select>
    <button type=submit>Modifier</button>
</form>
</div>