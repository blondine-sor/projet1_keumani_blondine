<?php
require_once "/xampp/htdocs/ecomm_1/projet1_keumani_blondine/config/connexion.php";
require_once "/xampp/htdocs/ecomm_1/projet1_keumani_blondine/athentification/authenticated.php";
require_once "/xampp/htdocs/ecomm_1/projet1_keumani_blondine/functions/userCrud.php";
session_start();
$users = getAllUsers();
$connectedUser = getUserNameByID($_SESSION['auth']['id']);
$user1 = getUserByUserName($connectedUser['user_name']);
// Affichage du profil du superAdmin
?>
<a href="../../index.php">Acceuil</a>
<form name="form1" method="post" action="./editSuperAdmin.php">
    <fieldset>
        <legend>Profils</legend>
        <label for="userName">Nom d'Utilisateurs: </label>
        <?php echo $connectedUser['user_name']; ?>
        <p></p>
        <label for="couriel">Email:</label>
        <input type="text" name="email" id="couriel" value="<?php echo $user1['email']; ?>">
        <p class="text-danger"><?php echo isset($_SESSION['update_errors']['email']) ? $_SESSION['update_errors']['email'] : '' ?></p>

        <label for="prenom">Prénom:</label>
        <input type="text" name="fname" id="prenom" value="<?php echo $user1['fname']; ?>">
        <p class="text-danger"><?php echo isset($_SESSION['update_errors']['fname']) ? $_SESSION['update_errors']['fname'] : '' ?></p>

        <label for="nom">Nom:</label>
        <input type="text" name="lname" id="nom" value="<?php echo $user1['lname']; ?>">
        <p class="text-danger"><?php echo isset($_SESSION['update_errors']['lname']) ? $_SESSION['update_errors']['lname'] : '' ?></p>

        <button type="submit">Modifier</button>
    </fieldset>
</form>
<form name="form2" method="post" action="./updateUserole.php">
    <fieldset>
        <legende>Modifier Le Role d'un utilisateur</legende>
        Utilisateurs:
        <select name="user_name">
            <option> </option>
            <?php foreach ($users as $name => $user) {
            ?> <option><?php
                        echo $user['user_name']; ?>
                </option><?php
                        } ?>
        </select>
        New Role:
        <input type="radio" name="role_id" id="new_role" value="1">superAdmin
        <input type="radio" name="role_id" id="new_role" value="2">Admin
        <input type="radio" name="role_id" id="new_role" value="3">Client
        <br>
        <br>
        <button type="submit">Modifier</button>


    </fieldset>
</form>