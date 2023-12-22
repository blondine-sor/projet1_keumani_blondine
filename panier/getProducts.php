<?php
require_once "../products/productCrud.php";
require_once "../config/connexion.php";
require_once "../functions/userCrud.php";
require_once "../products/productsValidation.php";




session_start();
if (isset($_POST)) {
    $numProducts = $_SESSION['nombreProduit'];
    // filtre Les produits choisie et l'ajoute dans le Shopping Cart
    $user_id = $_POST['user_id'];
    for ($i = 1; $i <= $numProducts; $i++) {
        $data = [
            'id' => $_POST['id' . $i],
            'quantity' => $_POST['quantity' . $i],
            'name' => $_POST['name' . $i],
            'price' => $_POST['price' . $i],
        ];
        if (!empty($data['quantity'])) {
            $shoppingCart[] = $data;
        }
    }
    var_dump($shoppingCart);
    // combien de tableau present dans le ShoppingCart
    $imax = count($shoppingCart);

    // garde le panier de l'utilisateur
    $_SESSION['panier'] = [
        'user_id' => $user_id,
        'shoppingCart' => $shoppingCart
    ];

    var_dump($_SESSION['panier']['shoppingCart']);
}
?>
<a href="../index.php">Accueil</a>