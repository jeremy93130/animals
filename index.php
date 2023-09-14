<?php

// Créer un formulaire avec les champs :
//nom,prenom,email,mdp

?>

<form action="./models/action.php" method="post">
    <label for="lastName">Nom</label>
    <input type="text" name="lastname">
    <label for="firstName">prenom</label>
    <input type="text" name="firstname">
    <label for="email">E-mail</label>
    <input type="email" name="email">
    <label for="password">Mot de passe</label>
    <input type="password" name="password">

    <input type="submit" name="submit">
</form>