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

<?php
    include('header.php');
?>

<!-- body content -->
<div id="content">
<div class="container-fluid text-center">    
  <div class="row content">

    <div class="col-sm-8 text-left"> 
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
    <div class="col-sm-4 sidenav">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Upcoming Training</h2><br>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Training</th>
                <th>Date</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        </div>
    </div>
    </div>
  </div>
    </div>
  </div>
</div>
</div>

<!-- footer info -->
<?php
    include('footer.php');
?>
