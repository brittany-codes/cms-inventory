<?php
require 'dbconnect.php';


if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];

    $conn->query("INSERT INTO training(name, date) VALUES('$name', '$date')") or
    die($conn->error);


    header("Location: ../training.php");
}

?>

<?php require '../header.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Create an Upcoming Training</h2>
        </div>
        <div class="card-body">
            <form action = "" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Submit</button>
        </div>
    </form>
        </div>
    </div>
</div>