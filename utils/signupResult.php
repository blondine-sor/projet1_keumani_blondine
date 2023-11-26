<?php
require_once "../functions/validation.php";
session_start();

if (isset($_POST)) {

    $_SESSION["signup_form"] = $_POST;

    unset($_SESSION['signup_errors']);

    $fieldIsValid = true;
    if (isset($_POST["user_name"])) {
        $validUserName = userNameIsValid($_POST["user_name"]);
        if ($validUserName == false) {
            $fieldIsValid = false;
        }
    }
    if (isset($_POST["user_name"])) {
        $validEmail = emailIsValid($_POST["email"]);
        if ($validEmail == false) {
            $fieldIsValid = false;
        }
    }
    if (isset($_POST["user_name"])) {
        $validpwd = pwdLenghtValidation($_POST["pwd"]);
        if ($validpwdl == false) {
            $fieldIsValid = false;
        }
    }
    if (isset($_POST["user_name"])) {
        $validfname = fnameIsValid($_POST["fname"]);
        if ($validfname == false) {
            $fieldIsValid = false;
        }
    }
    if (isset($_POST["user_name"])) {
        $validlname = lnameIsValid($_POST["lname"]);
        if ($validlname == false) {
            $fieldIsValid = false;
        }
    }
    if ($fieldValidation == true) {
        //envoyer à la DB
        var_dump($_POST);
        /* $encodedPwd = encodePwd($_POST['pwd']);
        $data = [
            'user_name' => $_POST['user_name'],
            'email' => $_POST['email'],
            'pwd' => $encodedPwd
        ];
        $newUser = createUser($data);*/
    } else {
        // redirect to signup et donner les messages d'erreur
        $_SESSION['signup_errors'] = [
            'user_name' => $validUserName['msg'],
            'email' => $validEmail['msg'],
            'pwd' => $validpwd['msg'],
            'fname' => $validfname['msg'],
            'lname' => $validlname['msg']

        ];
        $url = '../pages/signup.php';
        header('Location: ' . $url);
    }
} else {
    //redirect vers signup
    $url = '../pages/signup.php';
    header('Location: ' . $url);
}

?>
<a href="../index.php">Retour</a>