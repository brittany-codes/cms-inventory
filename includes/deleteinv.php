<?php

require 'dbconnect.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM inventory WHERE id=$id") or die($conn->error);


    header("Location: ../inventory.php");
}



?>