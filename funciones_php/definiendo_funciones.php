<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $content="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $content = $_POST["input"];
    }
    
    function nada($var){
        if(empty($var)){
            echo "<span style = 'color:red'>"."content esta vacio"."</span>";
        }else{
            echo "<span style = 'color:green'>"."content es: ".$var."</span>";
        }
    }

    ?>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <input type="text" name="input">
        <input type="submit" value="enviar">
    </form>

    <?php nada($content);?>
</body>
</html>