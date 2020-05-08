<?php
    include('header.php');
?>

<?php
require 'includes/dbconnect.php';

//fetch information from db

$result = $conn->query("SELECT * FROM users") or die($conn->error);
//pre_r($result);
//pre_r($result->fetch_assoc());
function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}


?>


<!-- body content -->


<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>All Users</h2><br>
            <a href="includes/adduser.php" class="btn btn-warning" role="button" aria-pressed="true">Add a User</a><br>
        </div><br>
        <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['uidUsers']; ?></td>
                <td><?php echo $row['emailUsers']; ?></td>
                <td>
                    <a href="includes/updateuser.php?edit=<?php echo $row['idUsers']; ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Do you want to delete this entry?')" href="includes/deleteuser.php?delete=<?php echo $row['idUsers']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        </div>
    </div>
</div>


<!-- footer info -->
<?php
    include('footer.php');
?>
