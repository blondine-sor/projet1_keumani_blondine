<?php
require_once "./productCrud.php";
require_once "../config/connexion.php";
require_once "./productsValidation.php";
session_start();

if (isset($_POST)) {

    unset($_SESSION['errors']);
    $validation = true;

    if (!empty($_POST['name'])) {
        if (strlen($_POST['name']) >= 20 || strlen($_POST['name']) <= 2) {
            $invalideName = false;
            $validation = false;
        }
    }
    if (!empty($_POST['quantity'])) {
        $quantityFormatIsValid = productQuantity($_POST['quantity']);
        if ($quantityFormatIsValid['isValid'] == false) {
            $validation = false;
        }
    }
    if (!empty($_POST['price'])) {
        $priceFormatIsValid = productPrice($_POST['price']);
        if ($priceFormatIsValid['isValid'] == false) {
            $validation = false;
        }
    }
    if (empty($_POST['img_url'])) {
        $urlVide = true;
        $validation = false;
    }
    if (empty($_POST['description'])) {
        $descVide = true;
        $validation = false;
    }

    if ($validation == true) {
        $data = [
            'name' => $_POST['name'],
            'quantity' => intval($_POST['quantity']),
            'price' => doubleval($_POST['price']),
            'img_url' => $_POST['img_url'],
            'description' => $_POST['description']
        ];
        $newProduct = updateProduct($data);
        $url = "../products/products.php";
        header('Location:' . $url);
    } else {
        $_SESSION['errors'] = [
            'name' => $invalideName,
            'quantity' => $quantityFormatIsValid['msg'],
            'price' => $priceFormatIsValid['msg'],
            'img_url' => $urlVide,
            'decription' => $descVide
        ];
        $url = "./addproducts.php";
        header('Location:  ' . $url);
    }
} else {
    $url = "./addproducts.php";
    header('Location: ' . $url);
}
?>
<a href="./addProducts.php">Retour</a>