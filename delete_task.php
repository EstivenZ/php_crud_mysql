<?php
include("db.php");

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $query= "DELETE FROM task WHERE id= $id";
    $result= mysqli_query($connection, $query);
    if(!$result){
        die("Fallo la consulta");
    }
    $_SESSION['message']= 'Tarea eliminada correctamente';
    $_SESSION['message_type']='danger';
    header("Location: index.php");
}

?>