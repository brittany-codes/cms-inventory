<?php
require 'dbconnect.php';

if(isset($_POST['export'])) {

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=audits.csv');

    $output = fopen("php://output", "w");

    fputcsv($output, array('ID', 'Name', 'Terminal', 'Date'));

    $query = "SELECT * FROM audits";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }

    fclose($output);
}