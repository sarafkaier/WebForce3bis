<?php

// $_POST représente les informations postées via un formulaire (method='post'). C'est une superglobale, et comme toutes les superglobales, c'est un tableau de données ARRAY.
// Attention chaque champ doit avoir un attribut name qui permet de créer l'indice dans notre ARRAY $_POST.

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>

<h1>Formulaire 1</h1>
<form action="" method="post">

    <label>Prénom :</label><br>
    <input type="text" name="prenom"><br><br>

    <label>Description :</label><br>
    <textarea name="description" rows="5" cols="22"></textarea><br><br>

    <input type="submit" value="Valider">

</form>
