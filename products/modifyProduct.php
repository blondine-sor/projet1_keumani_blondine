<?php
require_once "../config/connexion.php";
require_once "../functions/userCrud.php";
require_once "../products/productCrud.php";

if ($_POST) {
    if (!empty($_POST)) {
        $productToModify = getProductByName($_POST['name']);


?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/product.css">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link " href="../index.php">Accueil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="./products.php">Produits</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="./editProduct.php">Modifier Produit</a>
                    </li>
                </ul>
            </div>
        </nav>
        <form method="post" action="">
            <fieldset>
                <legend>
                    <h3 class="text text-align-center text-color-primary">Ajouter Produit</h3>
                </legend>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="id" value="<?php echo $productToModify['id'] ?>" hidden>
                        <label for="nomprod">Nom Produit</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="name" id="nomprod" placeholder="Nom du produit" value="<?php echo $productToModify['name'] ?>">
                        <p class="text-danger"><?php echo isset($_SESSION['errors']['name']) ? $_SESSION['errors']['name'] : '' ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="quantite">Quantité Produit</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="quantity" id="quantite" placeholder="Combien de produit y'a t'il" value="<?php echo $productToModify['quantity'] ?>">
                        <p class="text-danger"><?php echo isset($_SESSION['errors']['quantity']) ? "Nom Invalide" : '' ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="prix">Prix Produit</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="price" id="price" placeholder="Combien vaut le produit" value="<?php echo $productToModify['price'] ?>">
                        <p class="text-danger"><?php echo isset($_SESSION['errors']['price']) ? $_SESSION['errors']['price'] : '' ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="desc">Description Produit</label>
                    </div>
                    <div class="col-md-6">
                        <textarea class="card card-body" id="desc" name="description" placeholder="Description du produit" value="<?php echo $productToModify['description'] ?>"></textarea>
                        <p class="text-danger"><?php echo isset($_SESSION['errors']['description']) ? "Besoin d'une description" : '' ?></p>
                    </div>
                </div>
                <div>
                    <button class="btn btn-outline-success" type="submit">Modifier</button>
                </div>

            </fieldset>
        </form>
<?php } else {
        echo "Veuillez Choisir un produit";
    }
} else {
    header('Location: ./editProduct.php');
}
