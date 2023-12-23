<?php
function addProduct(array $data)
{

    global $conn;
    $query = "INSERT INTO product (id, name, quantity, price, img_url, description) VALUES (NULL, ?, ?, ?,?,?)";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "sidss",
            $data['name'],
            $data['quantity'],
            $data['price'],
            $data['img_url'],
            $data['description']
        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
    }
}

function getAllProducts()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM product");

    $productData = [];
    $i = 0;
    while ($rangeeData = mysqli_fetch_assoc($result)) {
        $productData[$i] = $rangeeData;
        $i++;
    };
    return $productData;
}

function getProductByID($id)
{

    global $conn;

    $query = "SELECT * FROM product WHERE product.id = '" . $id . "';";

    $result = mysqli_query($conn, $query);

    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getProductByName($name)
{

    global $conn;

    $query = "SELECT * FROM product WHERE product.name = '" . $name . "';";

    $result = mysqli_query($conn, $query);

    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function updateProduct(array $data)
{
    global $conn;

    $query = "UPDATE product SET name = ?,quantity = ?, price = ?, img_url = ?, description = ?
            WHERE product.id = ?";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "sidssi",
            $data['name'],
            $data['quantity'],
            $data['price'],
            $data['img_url'],
            $data['description'],
            $data['id']
        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
    }
}
