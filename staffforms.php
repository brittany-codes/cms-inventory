<?php
require 'includes/dbconnect.php';

//fetch information from db

$result = $conn->query("SELECT * FROM forms") or die($conn->error);
//pre_r($result);
//pre_r($result->fetch_assoc());
function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}


?>

<?php require 'header.php'; ?>

<!-- body content -->


<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Staff Forms</h2><br>
            <a href="includes/addform.php" class="btn btn-warning" role="button" aria-pressed="true">Add a Form</a><br>
        </div><br>
        <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Form Name</th>
                <th>Form Description</th>
                <th>Company</th>
                <th>Action</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td>
                    <a href="includes/updateform.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Do you want to delete this entry?')" href="includes/deleteform.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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
