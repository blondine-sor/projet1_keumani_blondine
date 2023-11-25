<?php





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
        <a class="navbar-brand" href="#"> Librairie Soleil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <h2>Inscription</h2>
    <form method="post" action="">
        <fieldset>
            <div class="mb-3">
                <label for="userName" class="form-label"> Nom d'utilisateur: </label>
                <input type="text" class="form-control" style="width:30%" id="userName" name="user_name" value="">
            </div>

            <div class="mb-3">
                <label for="motDePasse" class="form-label"> Mot de Passe: </label>
                <input type="password" class="form-control" style="width:30%" id="motDePasse" name="pwd" value="">
            </div>

            <div class="mb-3">
                <label for="e_mail" class="form-label"> Email: </label>
                <input type="text" class="form-control" style="width:30%" id="e_mail" name="email" value="">
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label"> Prénom: </label>
                <input type="text" class="form-control" style="width:30%" id="prenom" name="fname" value="">
            </div>

            <div class="mb-3">
                <label for="nom" class="form-label"> Nom: </label>
                <input type="text" class="form-control" style="width:30%" id="nom" name="lname" value="">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-outline-primary" style="float:right">S'inscrire</button>
            </div>
        </fieldset>
    </form>
</body>

</html>