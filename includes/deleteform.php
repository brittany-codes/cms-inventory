<?php

require 'dbconnect.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM forms WHERE id=$id") or die($conn->error);


    header("Location: ../staffforms.php");
}



?>