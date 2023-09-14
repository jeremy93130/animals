<?php require_once('./inc/header.php');?>
<form action="./models/connect.php" method="post">
    <label for="identifiant">Identifiant : </label>
    <input type="email" name="email">
    <label for="mdp">Mot de passe :</label>
    <input type="password" name="mdp">

    <input type="submit" name="submit">
</form>