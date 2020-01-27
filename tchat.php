<?php
session_start();

if(!isset($_SESSION["pseudo"])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
    
    <nav>
        <a href="functions/disconectAction.php">Disconect</a>
    </nav>

    <div class="messages">
        <div class="message">
            <strong>Thomas:</strong>
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, minima accusamus! Fugit facere a labore dolor beatae unde qui eos, dignissimos, aliquid itaque corporis animi molestias quas veritatis consectetur odit.</span>
        </div>
        <div class="message">
            <strong>Thomas:</strong>
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, minima accusamus! Fugit facere a labore dolor beatae unde qui eos, dignissimos, aliquid itaque corporis animi molestias quas veritatis consectetur odit.</span>
        </div>
        <div class="message messageSession">
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, minima accusamus! Fugit facere a labore dolor beatae unde qui eos, dignissimos, aliquid itaque corporis animi molestias quas veritatis consectetur odit.</span>
        </div>
        <div class="message">
            <strong>User test:</strong>
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, minima accusamus! Fugit facere a labore dolor beatae unde qui eos, dignissimos, aliquid itaque corporis animi molestias quas veritatis consectetur odit.</span>
        </div>
    </div>

    <form action="functions/setMessage.php" class="tchatForm" method="post">
        <textarea name="message"></textarea>
        <input type="submit" value="Envoyer">
    </form>

</body>
</html>


