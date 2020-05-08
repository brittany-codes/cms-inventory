<?php
require 'dbconnect.php';


if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $company = $_POST['company'];

    $conn->query("INSERT INTO forms(name, description, company) VALUES('$name', '$description', '$company')") or
    die($conn->error);


    header("Location: ../staffforms.php");
}

?>

<?php require '../header.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Create a New User</h2>
        </div>
        <div class="card-body">
            <form action = "" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label>Company</label>
            <input type="text" name="company" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Submit</button>
        </div>
    </form>
        </div>
    </div>
</div>