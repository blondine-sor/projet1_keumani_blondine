<?php
require_once "./athentification/authenticated.php";
require_once "./functions/userCrud.php";
require_once "./config/connexion.php";
session_start();
if (isset($_SESSION['auth'])) {
    $id = $_SESSION['auth']['id'];
    $athenticated = authenticated($_SESSION['auth']);
    $name = getUserNameByID($id);
    $role = $_SESSION['auth']['role_id'];
    $url = userIsAdmin($role);
} else {
}




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

        <img src="./Saved Pictures/iconeSoleil.jpg" class="img-circle" width="80" height="70" />
        <a class="navbar-brand" href="#">Librairie Soleil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/signup.php">S'enregistrer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/login.php">Se Connecter</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo isset($_SESSION['auth']['role_id']) ? $url : "" ?>">Profils</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <h3 style="float: right;">
        <a class="nav-link" href=#><?php echo isset($_SESSION['auth']) ? $name['user_name'] : "" ?></a>
    </h3>

    <form>
        <fieldset>
            <legend>
                <p class="text-primary">Bienvenue dans la librairie du Soleil.</p>
            </legend>


        </fieldset>
    </form>
    <form method="post" action="./utils/deconnexion.php">
        <button type="submit" class="btn btn-danger">Déconnexion</button>
    </form>
</body>

</html>