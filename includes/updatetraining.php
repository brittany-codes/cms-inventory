<?php

require 'dbconnect.php';

$id = 0;
$name='';
$date='';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM training where id=$id") or die($conn->error);

    if($result->num_rows) {
        $row = $result->fetch_array();
        $name = $row['name'];
        $date = $row['date'];
    }

}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];

    $conn->query("UPDATE training SET name='$name', date='$date' WHERE id=$id") or die($conn->error);
    header("Location: ../training.php");
}
?>

<?php require '../header.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Edit a Training</h2>
        </div>
        <div class="card-body">
            <form action = "" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" value="<?php echo $date; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </div>
    </form>
        </div>
    </div>
</div>


<?php require '../footer.php'; ?>