<?php
require 'includes/dbconnect.php';

//fetch information from db

$result = $conn->query("SELECT * FROM audits") or die($conn->error);
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
            <h2>Staff Audits</h2><br>
            <form method = "post" action="includes/exportaudits.php">
            <input type="submit" class = "btn btn-success" name="export" value="CSV Export" />
        </form>
            <a href="includes/addaudit.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Add an employee to Audit</a><br>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Employee Name</th>
                <th>Terminal</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['terminal']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                    <a href="includes/updateaudit.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Do you want to delete this entry?')" href="includes/deleteaudit.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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
