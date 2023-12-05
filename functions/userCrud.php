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

function getUserByUserName($user_name)
{

    global $conn;

    $query = "SELECT * FROM user WHERE user.user_name = '" . $user_name . "';";

    $result = mysqli_query($conn, $query);

    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function UpdateUser(array $data)
{
    global $conn;

    $query = "UPDATE user SET user_name = ?, email = ?, pwd = ?, fname = ?, lname = ?, billing_address_id,
            shipping_address_id = ?, role_id = ?
            WHERE user.id = ?;";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "isssssiisi",
            $data['id'],
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
