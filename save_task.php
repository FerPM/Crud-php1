<?php

include("bd.php");

if (isset($_POST['save_task'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];


    /* Guadado de datos en Database */
    $query = "INSERT INTO task(title, description) VALUES($title, $description)";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed");
    }

    echo 'saved'; 
}

?>