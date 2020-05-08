<?php
require 'dbconnect.php';

if(isset($_POST['export'])) {

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=inventory.csv');

    $output = fopen("php://output", "w");

    fputcsv($output, array('ID', 'Equipment', 'Make', 'Model', 'Serial', 'State', 'Cost', 'Date', 'Observations', 'Employee', 'Department', 'Terminal'));

    $query = "SELECT * FROM inventory";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }

    fclose($output);
}