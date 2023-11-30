<?php

function createUser(array $data)
{
    global $conn;

    $query = "INSERT INTO user VALUES (NULL, ?, ?, ?,?,?,?,?,?,?)";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "sssssiisi",
            $data['user_name'],
            $data['email'],
            $data['pwd'],
            $data['fname'],
            $data['lname'],
            $data['billing_address_id'],
            $data['shipping_address_id'],
            $data['token'],
            $data['role_id'],
        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
    }
}
