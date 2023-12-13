<?php


function addProduct(array $data)
{

    global $conn;

    $query = "INSERT INTO product VALUES (NULL, ?, ?, ?,?,?,)";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "sidss",
            $data['name'],
            $data['quantity'],
            $data['price'],
            $data['img_url'],
            $data['description'],
        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
    }
}
