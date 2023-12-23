<?php
function createOrder(array $data)
{
    global $conn;

    $query = "INSERT INTO order_has_product VALUES (?, ?, ?,?)";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "iiid",
            $data['order_id'],
            $data['product_id'],
            $data['quantity'],
            $data['price']
        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
    }
}

function createUserOrder(array $data)
{
    global $conn;

    $query = "INSERT INTO user_order VALUES (NULL, ?, ?, ?,?)";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "ssdi",
            $data['ref'],
            $data['date'],
            $data['total'],
            $data['user_id']
        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
    }
}

function getUserOrderId($user_id)
{
    global $conn;

    $query = "SELECT id FROM user_order WHERE user_order.user_id = '" . $user_id . "';";

    $result = mysqli_query($conn, $query);

    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}
