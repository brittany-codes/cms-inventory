<?php
require 'includes/dbconnect.php';

//fetch information from db

$result = $conn->query("SELECT * FROM inventory") or die($conn->error);
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
            <h2>Company Inventory</h2><br>
            <form method = "post" action="includes/exportinv.php">
            <input type="submit" class = "btn btn-success" name="export" value="CSV Export" />
        </form>
            <a href="includes/addinv.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Add Inventory</a><br>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Equipment</th>
                <th>Make</th>
                <th>Model</th>
                <th>SN</th>
                <th>New/Used</th>
                <th>Cost</th>
                <th>Date</th>
                <th>Observations</th>
                <th>Employee</th>
                <th>Department</th>
                <th>Terminal</th>
                <th>Action</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['equipment']; ?></td>
                <td><?php echo $row['make']; ?></td>
                <td><?php echo $row['model']; ?></td>
                <td><?php echo $row['serial']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['cost']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['observations']; ?></td>
                <td><?php echo $row['employee']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['terminal']; ?></td>
                <td>
                    <a href="includes/updateinv.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Do you want to delete this entry?')" href="includes/deleteinv.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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
