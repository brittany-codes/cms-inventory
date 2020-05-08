<?php

require 'dbconnect.php';

$id = 0;
$name='';
$description='';
$company='';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM policies where id=$id") or die($conn->error);

    if($result->num_rows) {
        $row = $result->fetch_array();
        $name = $row['name'];
        $description = $row['description'];
        $company = $row['company'];
    }

}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $company = $_POST['company'];

    $conn->query("UPDATE policies SET name='$name', description='$description', company='$company' WHERE id=$id") or die($conn->error);
    header("Location: ../staffpolicies.php");
}
?>

<?php require '../header.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Edit a Staff Policy</h2>
        </div>
        <div class="card-body">
            <form action = "" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
        </div>
        <div class="form-group">
            <label>Company</label>
            <input type="text" name="company" class="form-control" value="<?php echo $company; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </div>
    </form>
        </div>
    </div>
</div>


<?php require '../footer.php'; ?>