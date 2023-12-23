<?php
session_start();

if (isset($_POST)) {
    $id = intval($_POST['id']);
    if (isset($_SESSION['panier'])) {
        unset($_SESSION['panier'][$id]);
    }

    header('Location: ./panier.php');
}
