<!-- 1. Echo et HTML
Exercice 1 : Crée un script PHP qui affiche un message de bienvenue avec echo, en insérant des balises HTML pour styliser le texte (par exemple, afficher le message en gras ou en italique).

Exercice 2 : Utilise echo pour générer un formulaire HTML avec deux champs (nom et email) et un bouton d'envoi. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise.php" method="post">
        <label>Nom :</label><br>
        <input type="text" name="nom"><br>
        <label>Email :</label><br>
        <input type="email" name="email"><br>
        <input type="submit" value="submit"><br>
    </form>
</body>
</html>
<?php
$X = $_POST["nom"];
echo"Bonjour $X! Bienvenue!!";
?>
