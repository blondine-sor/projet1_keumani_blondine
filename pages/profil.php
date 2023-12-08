<?php
require_once "../config/connexion.php";
require_once "../athentification/authenticated.php";
require_once "../functions/userCrud.php";
session_start();
$connectedUser = getUserNameByID($_SESSION['auth']['id']);
$user1 = getUserByUserName($connectedUser['user_name']);
// Affichage des informations clents et admin
?>
<a href="../index.php">Acceuil</a>
<form method="post" action="../utils/editProfilResult.php">
    <fieldset>
        <legend>Profils</legend>
        <label for="userName">Nom d'Utilisateurs: </label>
        <?php echo $connectedUser['user_name']; ?>
        <p></p>
        <label for="password">Mot de passe:</label>
        <input type="password" name="pwd" id="password" value="<?php echo $user1['pwd']; ?>">
        <p></p>
        <label for="couriel">Email:</label>
        <input type="text" name="email" id="couriel" value="<?php echo $user1['email']; ?>">
        <p><?php echo isset($_SESSION['update_errors']['email']) ? $_SESSION['update_errors']['email'] : '' ?></p>

        <label for="prenom">Prénom:</label>
        <input type="text" name="fname" id="prenom" value="<?php echo $user1['fname']; ?>">
        <p><?php echo isset($_SESSION['update_errors']['fname']) ? $_SESSION['update_errors']['fname'] : '' ?></p>

        <label for="nom">Nom:</label>
        <input type="text" name="lname" id="nom" value="<?php echo $user1['lname']; ?>">
        <p><?php echo isset($_SESSION['update_errors']['lname']) ? $_SESSION['update_errors']['lname'] : '' ?></p>

        <button type="submit">Modifier</button>
    </fieldset>
</form>