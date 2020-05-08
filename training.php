<?php
    include('header.php');
?>

<?php
require 'includes/eventcalendar.php';

?>

<?php
require 'includes/dbconnect.php';

//fetch information from db

$result = $conn->query("SELECT * FROM training") or die($conn->error);
//pre_r($result);
//pre_r($result->fetch_assoc());
function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}


?>

<!-- body content -->
<div id="content">
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-6 text-left"> 
    <div class="card mt-5">
        <div class="card-header">
            <h2>Upcoming Training</h2><br>
            <a href="includes/addtraining.php" class="btn btn-warning" role="button" aria-pressed="true">Add Training</a><br>
        </div><br>
        <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                    <a href="includes/updatetraining.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Do you want to delete this entry?')" href="includes/deletetraining.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        </div>
    </div>
    </div>
    <div class="col-sm-6 text-left">
    <h2>Calendar of Events</h2>
    <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo  $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
      <br>

      <table class="table table-bordered cal">
        <tr>
          <th>S</th>
          <th>M</th>
          <th>T</th>
          <th>W</th>
          <th>T</th>
          <th>F</th>
          <th>S</th>
        </tr>
        <?php
          foreach ($weeks as $week) {
            echo $week;
          }
        ?>
      </table>

    </div>
  </div>
</div>
</div>

<!-- footer info -->
<?php
    include('footer.php');
?>

