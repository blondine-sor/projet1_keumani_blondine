<?php
require_once "../config/connexion.php";
require_once "../panier/orderCrud.php";

session_start();
if (isset($_SESSION['user_order'])) {
    $user_id = $_SESSION['auth']['id'];
    $orderId = getUserOrderId(intval($user_id));
    $orderHasProduct = $_SESSION['panier'];
    //Creation de Order_has_Product
    foreach ($orderHasProduct as $order) {
        $data = [
            'order_id' => intval($orderId['id']),
            'product_id' => intval($order['id']),
            'quantity' => intval($order['quantity']),
            'price' => doubleval($order['price'])
        ];
        createOrder($data);
    }
    array_splice($_SESSION['panier'], 0, count($_SESSION['panier']));
}
?>
<h1>Payment Successfull</h1>
<a href="../index.php">Ratour A l'Accueil</a>