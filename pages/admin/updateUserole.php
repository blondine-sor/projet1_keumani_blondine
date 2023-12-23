<?php
require_once "/xampp/htdocs/ecomm_1/projet1_keumani_blondine/functions/userCrud.php";
require_once "/xampp/htdocs/ecomm_1/projet1_keumani_blondine/config/connexion.php";
require_once "/xampp/htdocs/ecomm_1/projet1_keumani_blondine/functions/validations.php";
session_start();
// Update des roles des utilisateur
if (isset($_POST)) {
    $role_id = intval($_POST['role_id']);
    $data = [
        'role_id' => $role_id,
        'user_name' => $_POST['user_name']
    ];
    $updatedUserRole = updateUserRole($data);
}
?>
<h1> User Updated!!!</h1>
<a href="./superAdminprofile.php">Retour</a>