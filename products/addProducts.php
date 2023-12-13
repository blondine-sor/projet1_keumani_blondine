<?php
require_once "../config/connexion.php";
require_once "../functions/userCrud.php";


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Accueil</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./products.php">Produits</a>
            </li>
        </ul>
    </div>
</nav>
<form method="post" action="./productResult.php">
    <fieldset>
        <legend>
            <h3 class="text text-align-center text-color-primary">Ajouter Produit</h3>
        </legend>
        <div class="row">
            <div class="col-md-3">
                <label for="nomprod">Nom Produit</label>
            </div>
            <div class="col-md-3">
                <input type="text" name="name" id="nomprod" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="quantite">Quantité Produit</label>
            </div>
            <div class="col-md-3">
                <input type="text" name="quantity" id="quatity" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="prix">Prix Produit</label>
            </div>
            <div class="col-md-3">
                <input type="text" name="price" id="prix" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="image">LienImage Produit</label>
            </div>
            <div class="col-md-3">
                <input type="text" name="img_url" id="image" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="desc">Description Produit</label>
            </div>
            <div class="col-md-6">
                <textarea class="card" id="desc" name="description" value=""></textarea>
            </div>
        </div>
        <div>
            <button type="submit">Ajouter</button>
        </div>

    </fieldset>
</form>