<?php
require_once "../config/connexion.php";
require_once "../panier/orderCrud.php";

session_start();
if (isset($_SESSION['user_order'])) {
    $user_id = $_SESSION['auth']['id'];
    $user_order = $_SESSION['user_order'];
    createUserOrder($user_order);
    $order_id = getUserOrderId($user_id);

    $orderHasProduct = $_SESSION['panier'];
    //Creation de Order_has_Product
    foreach ($orderHasProduct as $order) {
        $data = [
            'order_id' => intval($order_id),
            'product_id' => intval($order['id']),
            'quantity' => intval($order['quantity']),
            'price' => doubleval($order['price'])
        ];
        createOrder($data);
    }

    unset($_SESSION['panier']);
}
?>
<h1>Payment Successfull</h1>
<a href="../index.php">Ratour A l'Accueil</a>