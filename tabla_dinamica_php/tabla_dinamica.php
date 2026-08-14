<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "test_php";


$connection = mysqli_connect($host,$user,$password,$db);
    
if($connection){
    echo "online";
}else{
    echo "algo salio mal, error: ". mysqli_connect_error();

}

$query = "select * from empleados";
$result = "";

try {
    $result = mysqli_query($connection,$query);
    echo "consulta realizada correctamente.";
} catch (Exception $e) {
    echo "error, algo salio mal: ",$e->getMessage();
}
?>

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
    </tr>

    <?php
    
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row["nombre"]; ?></td>
        <td><?php echo $row["apellidos"]; ?></td>
    </tr>

    <?php
    }
    ?>

</table>