<?php
session_start();








?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="../Saved Pictures/iconeSoleil.jpg" class="img-circle" width="80" height="70" />
        <a class="navbar-brand"> Librairie Soleil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./signup.php">S'enregistrer</a>
                </li>
            </ul>
    </nav>

    <form method="post" action="../utils/loginResult.php">
        <label for="user_name">Nom d'utilisateur</label>
        <input id="user_name" type="text" name="user_name" value="">
        <p class="text-danger"><?php echo isset($_SESSION['login_errors']['error_username']) ? "Le nom d'utilisateur n'existe pas" : '' ?></p>
        <label for="pwd">Mot de passe</label>
        <input id="pwd" type="password" name="pwd" value="">
        <p class="text-danger"><?php echo isset($_SESSION['login_errors']['error_pwd']) ? "Mot de passe invalide" : '' ?></p>
        <button type="submit" class="btn btn-success">Me connecter</button>
    </form>