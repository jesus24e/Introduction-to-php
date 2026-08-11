<?php
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "test_php";

    $connection = mysqli_connect($host,$user,$password,$db);

    //echo !$connection ? "offline":"online"; 

    $query = "delete from empleados where id=2";

    if(mysqli_query($connection,$query)){
        echo "registro borrado";
    }else{
        echo "algo salio mal: " . mysqli_error($connection);
    }
    
    mysqli_close($connection);

?>