<?php

require 'dbconnect.php';

$idUsers = 0;
$uidUsers='';
$emailUsers='';
$pwdUsers='';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM users where idUsers=$idUsers") or die($conn->error);

    if($result->num_rows) {
        $row = $result->fetch_array();
        $name = $row['uidUsers'];
        $description = $row['emailUsers'];
        $company = $row['pwdUsers'];
    }

}

if (isset($_POST['update'])) {
    $id = $_POST['idUsers'];
    $name = $_POST['uidUsers'];
    $description = $_POST['emailUsers'];
    $company = $_POST['pwdUsers'];

    $conn->query("UPDATE users SET uidUsers='$uidUsers', emailUsers='$emailUsers', pwdUsers='$pwdUsers' WHERE idUsers=$idUsers") or die($conn->error);
    header("Location: ../users.php");
}
?>

<?php require '../header.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Edit a User</h2>
        </div>
        <div class="card-body">
            <form action = "" method="POST">
            <input type="hidden" name="idUsers" value="<?php echo $idUsers; ?>">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="uidUsers" class="form-control" value="<?php echo $uidUsers; ?>">
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="text" name="emailUsers" class="form-control" value="<?php echo $emailUsers; ?>">
        </div>
        <div class="form-group">
            <label>Reset Password</label>
            <input type="password" name="pwdUsers" class="form-control" value="<?php echo $pwdUsers; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </div>
    </form>
        </div>
    </div>
</div>


<?php require '../footer.php'; ?>