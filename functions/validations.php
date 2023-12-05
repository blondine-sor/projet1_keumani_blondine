<?php
function userNameIsValid(string $username): array
{
    $result = [
        "isValid" => true,
        "msg" => ""
    ];
    $userInDB = getUserByUsername($username);

    if (strlen($username) <= 2) {
        $result = [
            'isValid' => false,
            'msg' => 'Le nom utilisé est trop court'
        ];
    } elseif (strlen($username) > 20) {
        $result = [
            'isValid' => false,
            'msg' => 'Le nom utilisé est trop long'

        ];
    } elseif ($userInDB) {
        $result = [
            'isValid' => false,
            'msg' => 'Le UserName est déjà utilisé'
        ];
    }
    return $result;
};
function emailIsValid($email)
{

    $email_validation_regex = "/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/";
    if (!preg_match($email_validation_regex, $email)) {
        return [
            'isValid' => false,
            'msg' => "Format d'email invalid",
        ];
    }
    return [
        'isValid' => true,
        'msg' => '',
    ];
}
function pwdLenghtValidation($pwd)
{
    //minimum 8 max 16
    $length = strlen($pwd);

    if ($length < 8) {
        return [
            'isValid' => false,
            'msg' => 'Votre mot de passe est trop court. Doit être supérieur a 8 caractères'
        ];
    } elseif ($length > 16) {
        return [
            'isValid' => false,
            'msg' => 'Votre mot de passe est trop long. Doit être inférieur a 16 caractères'
        ];
    }
    return [
        'isValid' => true,
        'msg' => ''
    ];
}
function fnameIsValid($fname)
{
    $result = [
        "isValid" => true,
        "msg" => ""
    ];

    if (strlen($fname) <= 3) {
        $result = [
            "isValid" => false,
            "msg" => "Ce prenom est trop court"
        ];
    } elseif (strlen($fname) >= 50) {
        $result = [
            "isValid" => false,
            "msg" => "Ce prenom est trop long"
        ];
    }
    return $result;
}
function lnameIsValid($lname)
{
    $result = [
        "isValid" => true,
        "msg" => ""
    ];

    if (strlen($lname) <= 3) {
        $result = [
            "isValid" => false,
            "msg" => "Le nom est trop court"
        ];
    } elseif (strlen($lname) >= 50) {
        $result = [
            "isValid" => false,
            "msg" => "Le nom est trop long"
        ];
    }
    return $result;
}
