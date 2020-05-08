<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "cmslogin";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection Unsuccessful: ".mysqli_connect_error());
}