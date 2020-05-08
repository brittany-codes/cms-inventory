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
        </div>
        <form method = "post" action="includes/export.php">
            <input type="submit" class = "btn btn-success" name="export" value="CSV Export" />
        </form>
        <br>
        <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Policy Name</th>
                <th>Policy Description</th>
                <th>Company</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['company']; ?></td>
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
