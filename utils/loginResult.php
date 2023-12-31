<?php
//require all functions
require_once "../functions/function.php";
require_once "../functions/userCrud.php";
require_once "../functions/validations.php";
require_once "../config/connexion.php";
session_start();
$token = hash('sha256', random_bytes(32));

if (isset($_POST)) {

    //url de reirection
    $url = '../pages/login.php';

    unset($_SESSION['login_errors']);

    if (!empty($_POST['user_name'])) {
        $userIsPresent = getUserByUserName($_POST['user_name']);
    } else {
        //Erreur rien entré
        //redirect vers login

        header('Location: ' . $url);
    }

    if ($userIsPresent) {
        $enteredPassword = encodePwd($_POST['pwd']);
        $data = [

            'token' => $token,
            'id' => $userIsPresent['id'],
        ];
        // ajout du token dans la db
        $addgeneratedToken = updateToken($data);
        if ($userIsPresent['pwd'] == $enteredPassword) {
            $_SESSION['auth'] = [
                'id' => $userIsPresent['id'],
                'role_id' => $userIsPresent['role_id'],
                'token' => $userIsPresent['token']

            ];

            header('Location: ../index.php');
        } else {
            $_SESSION['login_errors'] = [
                'error_pwd' => true
            ];

            header('Location: ' . $url);
        }
    } else {
        $_SESSION['login_errors'] = [
            'error_username' => true
        ];

        header('Location: ' . $url);
    }
} else {
    //redirect vers login

    header('Location: ' . $url);
}
