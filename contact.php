
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
<div id="content">
<div class="container-fluid text-center">    
    <div class="row content">
  
      <div class="col-sm-8 text-left"> 
        <form>
            <h1>Contact IT</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" placeholder="name">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="phone" class="form-control" id="phone" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <label for="department">Department</label>
                <select class="form-control" id="department">
                  <option>Human Resources</option>
                  <option>Administration</option>
                  <option>Safety</option>
                  <option>Operations</option>
                  <option>Sales</option>
                  <option>Settlements</option>
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
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

<!-- footer info -->
<?php
    include('footer.php');
?>

