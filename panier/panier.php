<?php
require_once "../products/productCrud.php";
require_once "../config/connexion.php";
require_once "../functions/userCrud.php";
require_once "../products/productsValidation.php";

session_start();
if (isset($_SESSION['panier'])) {

    $user_id = $_SESSION['auth']['id'];
    $username = getUserNameByID($user_id);
    $shoppingCart = $_SESSION['panier'];
}
//Affichage du panier
?>

<table name="Panier" border="2">
    <thead>
        <tr>
            <td>Nom Produits</td>
            <td>Quantité</td>
            <td>Prix</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($shoppingCart as $shopper) {

        ?>
            <tr>
                <td>
                    <?php echo $shopper['name'] ?>
                </td>
                <td>
                    <?php echo $shopper['quantity'] ?>
                </td>
                <td>
                    <?php echo $shopper['price'] ?>
                </td>
                <td>
                    <form method="post" action="">
                        <input type=text name="id" value="<?php echo $shopper['id'] ?>" hidden>
                        <button type="submit">Modifier</button>
                    </form>
                </td>
                <td>
                    <form method="post" action="./removeOneProduct.php">
                        <input type=text name="id" value="<?php echo $shopper['id'] ?>" hidden>
                        <button type="submit">Modifier</button>
                    </form>
                </td>
            <?php } ?>
            </tr>
    <tfoot>
        <tr>
            <td>
                <form method="post" action="./panierCheckout.php">
                    <button type="submit">Commander</button>
                </form>
            </td>
        </tr>
    </tfoot>


    </tbody>
</table>

<a href="../index.php">Accueil</a>