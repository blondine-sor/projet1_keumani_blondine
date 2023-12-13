<?php
//to do Authentification
function authenticated(array $data)
{
    if ($data) {
        echo "User Connected";
    } else {
        echo "";
    }
}

function userIsAdmin($data)
{
    if (intval($data) === 1) {
        $url = "./pages/admin/superAdminprofile.php";
    } elseif (intval($data) == 2 || intval($data) == 3) {
        $url = "./pages/profil.php";
    } else {
        $url = "./pages/login.php";
    }
    return $url;
}

function productManagement($data)
{
    if (intval($data) == 1 || intval($data) == 2) {
        $url = "./products/addproducts.php";
    } else {
        $url = "./products/products.php";
    }
    return $url;
}
