<?php
require 'includes/dbconnect.php';

//fetch information from db

$result = $conn->query("SELECT * FROM policies") or die($conn->error);
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
            <h2>Staff Policies</h2><br>
        <form method = "post" action="includes/exportpolicies.php">
            <input type="submit" class = "btn btn-success" name="export" value="CSV Export" />
        </form>
            <a href="includes/createpolicy.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Add a Policy</a><br>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Policy Name</th>
                <th>Policy Description</th>
                <th>Company</th>
                <th>Action</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td>
                    <a href="includes/updatepolicy.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Do you want to delete this entry?')" href="includes/deletepolicy.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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
