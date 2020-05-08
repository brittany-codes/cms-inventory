<?php

require 'dbconnect.php';

$id = 0;
$name='';
$terminal='';
$date='';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM audits where id=$id") or die($conn->error);

    if($result->num_rows) {
        $row = $result->fetch_array();
        $name = $row['name'];
        $terminal = $row['terminal'];
        $date = $row['date'];
    }

}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $terminal = $_POST['terminal'];
    $date = $_POST['date'];

    $conn->query("UPDATE audits SET name='$name', terminal='$terminal', date='$date' WHERE id=$id") or die($conn->error);
    header("Location: ../staffaudits.php");
}
?>

<?php require '../header.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Edit a Staff Employee Audit</h2>
        </div>
        <div class="card-body">
            <form action = "" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label>Employee Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label>Terminal</label>
            <input type="text" name="terminal" class="form-control" value="<?php echo $terminal; ?>">
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