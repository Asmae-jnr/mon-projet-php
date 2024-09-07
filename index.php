<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username :</label><br>
        <input type="text" name="username"><br>
        <label>Quantity :</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Total">
    </form>
</body>
</html>
<?php
$X = $_POST["username"];
$Item = "Pizza";
$Qty = $_POST["quantity"];
$Price = 13;
$Total = $_POST["quantity"] * $Price;
echo "Hello $X , Welcome !" . "<br>";
echo "You have ordered $Qty x $Item/s" . "<br>";
echo "Your total is : $$Total" . "<br>";
echo $_POST["username"] . "<br>";
echo $_POST["quantity"] . "<br>";
?>
