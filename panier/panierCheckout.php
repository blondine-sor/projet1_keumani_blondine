<?php
require_once "../config/connexion.php";
require_once "../panier/orderCrud.php";
require_once "../functions/userCrud.php";

session_start();
$user_id = $_SESSION['auth']['id'];
$userName = getUserNameByID($user_id);
//variable pour le prix total
$totalPrixOrder = 0;
$totalQuantityOrder = 0;

if (isset($_SESSION['panier'])) {
    $shoppingCART = $_SESSION['panier'];
    foreach ($shoppingCART as $orderInfo) {
        $totalQuantityOrder += intval($orderInfo['quantity']);
        $totalPrixOrder += doubleval($orderInfo['price']);
    }
    echo ($totalPrixOrder);
    echo ($totalQuantityOrder);
    $date = date('Y-m-d');
    //Creation de la reference
    $ref = $userName['user_name'] . $date . $totalQuantityOrder;
    // Creation du user_order pour la confirmation du payment
    $user_order = [
        'ref' => $ref,
        'date' => $date,
        'total' => $totalPrixOrder,
        'user_id' => $user_id
    ];

    createUserOrder($user_order);
}

// Creation de la facture
?>

<h1 class="facture">Facture</h1>
<div class="container">
    <div class="row">
        <div="col-md-6">
            <h3>Reference:</h3> <?php echo $ref  ?>
            <br />
            <h3>Date:</h3> <?php echo $date  ?>
            <br />
            <h3>Total: </h3> <?php echo $totalPrixOrder  ?>
            <br />
            <h3>Taxes Icluses:</h3> <?php echo ($totalPrixOrder * 0.05) + $totalPrixOrder  ?>
            <form method="post" action="./confirmPayment.php">
                <button type="submit">ConfirmPayment</button>
                <input type="button" value="CancelPayment" onclick="history.back()" />
            </form>

    </div>
</div>
</div>