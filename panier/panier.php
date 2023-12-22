<?php
require_once "../products/productCrud.php";
require_once "../config/connexion.php";
require_once "../functions/userCrud.php";
require_once "../products/productsValidation.php";

session_start();
if (isset($_SESSION['panier'])) {
    $user_id = $_SESSION['panier']['user_id'];
    $username = getUserNameByID($user_id);
    $shoppingCart = $_SESSION['panier']['shoppingCart'];
    $imax = count($shoppingCart);
}
?>
<h1>Panier <?php echo $username['user_name'] ?></h1>
<form method="post" action="">
    <?php for ($i = 0; $i < $imax; $i++) { ?>
        <fieldset>
            <label for="name"> Titre: <?php echo $shoppingCart[$i]['name'] ?></label>
            <br />
            <label for="quantite">Quantité:</label>
            <input type="text" id="quantite" name="quantity <?php echo $i ?>" value="<?php echo $shoppingCart[$i]['quantity'] ?>">
            <br />
            <label for="prix">Prix</label>
            <input type="text" id="prix" name="price <?php echo $i ?>" value="<?php echo $shoppingCart[$i]['price'] ?>">
            <input type="submit" name="delete" value="Supprimer">
        </fieldset>

    <?php } ?>
    <br />
    <input type="submit" name="confirmer" value="Commander">
</form>
<?php

?>
<a href="../index.php">Accueil</a>