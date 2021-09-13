<?php

include("db.php");

if (isset($_POST['save_task'])){
    $title= $_POST['title'];
    $description= $_POST['description'];

    $query= "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $resultado= mysqli_query($connection, $query);
    if(!$resultado){
        die("Query failed");
    }

    $_SESSION['message']= 'Tarea guardada correctamente';
    $_SESSION['message_type']= 'success';

    header("Location: index.php");
}

?>