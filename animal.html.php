<?php require_once("./inc/header.php") ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/animalForm.css">
    <title>Document</title>
</head>

<h2>PET_SHOP</h2>
<form action="./models/action.php" method="post" class="animalForm">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="pet-select">Diet :</label>

    <select name="type" id="pet-select">
        <option value="carnivorous">Carnivorus</option>
        <option value="herbivorous">Herbivorus</option>
        <option value="omnivorous">Omnivorus</option>
    </select>

    <label for="breed">Breed :</label>
    <input type="text" name="breed" id="breed">

    <input type="submit" name="submitAnimal" value="submit">
</form>