<?php
require_once "../products/productCrud.php";
require_once "../config/connexion.php";
require_once "../functions/userCrud.php";
require_once "../products/productsValidation.php";




session_start();
if (isset($_SESSION['auth'])) {
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
                $shoppingCart[$data['id']] = $data;
            }
        }

        // garde le panier de l'utilisateur
        $_SESSION['panier'] = $shoppingCart;
        header('Location:./panier.php');
    } else {
        header('Location: ../products/products.php');
    }
} else {
    header('Location: ../pages/login.php');
}
