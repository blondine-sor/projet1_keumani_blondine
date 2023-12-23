<?php
require_once "../products/productCrud.php";
require_once "../config/connexion.php";
require_once "../functions/userCrud.php";
require_once "../products/productsValidation.php";

session_start();
if (isset($_SESSION['auth'])) {
    if (isset($_SESSION['panier'])) {

        $user_id = $_SESSION['auth']['id'];
        $username = getUserNameByID($user_id);
        $shoppingCart = $_SESSION['panier'];

        //Affichage du panier
?>
        <link rel="stylesheet" href="../styles/librairie2.css">
        <table class="panier" border="2">
            <thead class="head">
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
                            <form method="post" action="./removeOneProduct.php">
                                <input type=text name="id" value="<?php echo $shopper['id'] ?>" hidden>
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        <form method="post" action="./panierCheckout.php">
                            <button type="submit">Commander</button>
                        </form>
                    </td>
                </tr>
            </tfoot>
        </table>

        <a href="../index.php">Accueil</a>
    <?php } else {
    ?>
        <h3 class="warning">Le Panier Est Vide</h3>
<?php }
} else {
    header('Location: ../pages/login.php');
}
