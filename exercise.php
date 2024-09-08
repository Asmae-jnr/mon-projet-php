<!-- 1. Echo et HTML
Exercice 1 : Crée un script PHP qui affiche un message de bienvenue avec echo, en insérant des balises HTML pour styliser le texte (par exemple, afficher le message en gras ou en italique).

Exercice 2 : Utilise echo pour générer un formulaire HTML avec deux champs (nom et email) et un bouton d'envoi. -->


<!-- <!DOCTYPE html>
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
// $X = $_POST["nom"];
// echo"Bonjour $X! Bienvenue!!";
?> -->

<!-- ------------------------------------------------------------------------------- -->

<!-- Exercice 4 : Déclare trois variables : une chaîne de caractères, un nombre entier, et un nombre flottant. Affiche-les avec echo, en utilisant une phrase descriptive pour chaque variable.
Exercice 5 : Crée un formulaire qui prend une chaîne de caractères en entrée et calcule sa longueur, puis affiche la longueur sur la page. -->

<!-- <?php
// $Chaine = "Jungkook";
// $age = 25;
// $Salary = 1000.889;
// $Length = strlen($Chaine);

// echo "My BIAS is $Chaine, he is $age years old, his 
// net worth is $Salary$." . "<br>";
// echo "his name is so long it has $Length characters.";
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise.php" method="post">
        <label>Name :</label>
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>
<?php
$name = $_POST["name"];
$Length = strlen($name);

echo "Hey $name, your name has $Length characters."
?>
</body>
</html>

<!-- ------------------------------------------------------------------------------- -->

