<?php
    include('header.php');
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
<main>
<div class="container-fluid text-center">    
  <div class="row content">

    <div class="col-sm-8 text-left"> 
      <h1>Welcome To The Hub</h1>

        <?php
            if(isset($_SESSION['userId'])) {
                echo '<p class="login-status">You are logged in.</p>';
            }
            else {
                echo '<p class="login-status">You are logged out.</p>';
            }
        ?>
      <p>The Information Technology Department performs a variety of functions that range from installing applications to designing complex networks and information databases. The duties of the IT staff include data management, technical documentation of all processes and procedures, networking, computer hardware/software, telephony, database, websites, graphics and design, video production, maintenance of the company’s social media sites, as well as management and administration of entire systems.</p>
      <hr>
      <h3>News and Updates</h3>
      <p>This month we are providing exclusive trainings on our TMW, TMT, and Total Mail Systems. Sign up to receive credit for your yearly training's required.</p>
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
</main>

<!-- footer info -->
<?php
    include('footer.php');
?>

