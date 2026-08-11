<?php
    $nombre = $correo = $web = $comentario = "";
    $nombreErr = $correoErr = "";


    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = test_input($_POST["input_nombre"]);
        $correo = test_input($_POST["input_correo"]);
        $web = test_input($_POST["input_web"]);
        $comentario = test_input($_POST["t_area_comentarios"]);

        if(empty($_POST["input_nombre"])){
            $nombreErr = "El nombre es obligatorio";
        }else{
            $nombre = test_input($_POST["input_nombre"]);
        }
        if(empty($_POST["input_correo"])){
            $correoErr = "El correo es obligatorio";
        }else{
            $correo = test_input($_POST["input_correo"]);
        }
        if(empty($_POST["input_web"])){
            $web = "";
        }else{
            $web = test_input($_POST["input_web"]);
        }
        if(empty($_POST["t_area_comentarios"])){
            $comentario = "";
        }else{
            $comentario = test_input($_POST["t_area_comentarios"]);
        }

    }
    

    function test_input($data){
        $data = trim($data);//quita los espacios en blanco
        $data = stripslashes($data);//quita las barras invertidas
        $data = htmlspecialchars($data);
        return $data;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de validación</h1>
    <?php
        if(!empty($nombreErr)){
            echo "<span style = 'color:red'>".$nombreErr."</span><br><br>";
        }
        
        if(!empty($correoErr)){
            echo "<span style = 'color:red'>".$correoErr."</span><br><br>";
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label id="label_nombre">Nombre: </label>
        <input type="text" id="input_nombre" name="input_nombre">
        <br><br>
        <label id="label_correo">E-mail: </label>
        <input type="text" id="input_correo" name="input_correo">
        <br><br>
        <label id="label_web">Web: </label>
        <input type="text" id="input_web" name="input_web">
        <br><br>
        <label id="label_comentarios">comentarios: </label>
        <textarea id="t_area_comentarios" rows="5" cols="30" name="t_area_comentarios"></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <h2>Datos recopilados</h2>
    <?php
        echo "<h2>Tus datos:</h2>";
        echo "<br><br>";
        echo $nombre;
        echo "<br><br>";
        echo $correo;
        echo "<br><br>";
        echo $web;
        echo "<br><br>";
        echo $comentario;
        
    ?>
</body>
</html>