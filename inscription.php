<?php
    session_start();
    if(isset($_SESSION['mail'])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insription</title>
</head>
<body>
    <form action="PHP/signup.php" method="POST">
        <input type="text" name="pseudo" placeholder="Entrez votre pseudo">
        <input type="text" name="mail" placeholder="Entrez votre e-mail">
        <input type="password" name="password" placeholder="Entrez votre mot de passe">
        <input type="submit" name="btn">
    </form>
</body>
</html>