<?php

require 'dbconnect.php';

$id = 0;
$equipment='';
$make='';
$model='';
$serial='';
$state='';
$cost='';
$date='';
$observations='';
$employee='';
$department='';
$terminal='';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM inventory where id=$id") or die($conn->error);

    if($result->num_rows) {
        $row = $result->fetch_array();
        $equipment = $row['equipment'];
        $make = $row['make'];
        $model = $row['model'];
        $serial = $row['serial'];
        $state = $row['state'];
        $cost = $row['cost'];
        $date = $row['date'];
        $observations = $row['observations'];
        $employee = $row['employee'];
        $department = $row['department'];
        $terminal = $row['terminal'];
    }

}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $equipment = $_POST['equipment'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $serial = $_POST['serial'];
    $state = $_POST['state'];
    $cost = $_POST['cost'];
    $date = $_POST['date'];
    $observations = $_POST['observations'];
    $employee = $_POST['employee'];
    $department = $_POST['department'];
    $terminal = $_POST['terminal'];

    $conn->query("UPDATE inventory SET equipment='$equipment', make='$make', model='$model', serial='$serial', state='$state', cost='$cost', date='$date', observations='$observations', employee='$employee', department='$department', terminal='$terminal'  WHERE id=$id") or die($conn->error);
    header("Location: ../inventory.php");
}
?>

<?php require '../header.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Edit Inventory</h2>
        </div>
        <div class="card-body">
            <form action = "" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label>Equipment</label>
            <select class="form-control" name = "equipment">
            <option value="Laptop"
                <?php 
                    if($row["equipment"]=='Laptop')
                        {
	                        echo "selected";
                        }
                ?>>Laptop</option>
            <option value="Desktop"
                <?php 
                    if($row["equipment"]=='Desktop')
                        {
	                        echo "selected";
                        }
                ?>>Desktop</option>
            <option value="Mouse"
                <?php 
                    if($row["equipment"]=='Mouse')
                        {
	                        echo "selected";
                        }
                ?>>Mouse</option>
            <option value="Phone Extension"
                <?php 
                    if($row["equipment"]=='Phone Extension')
                        {
	                        echo "selected";
                        }
                ?>>Phone Extension</option>
            <option value="Phone Charger"
                <?php 
                    if($row["equipment"]=='Phone Charger')
                        {
	                        echo "selected";
                        }
                ?>>Phone Charger</option>
            <option value="Cell Phone"
                <?php 
                    if($row["equipment"]=='Cell Phone')
                        {
	                        echo "selected";
                        }
                ?>>Cell Phone</option>
            <option value="Tablet"
                <?php 
                    if($row["equipment"]=='Tablet')
                        {
	                        echo "selected";
                        }
                ?>>Tablet</option>
            <option value="Monitor"
                <?php 
                    if($row["equipment"]=='Monitor')
                        {
	                        echo "selected";
                        }
                ?>>Monitor</option>
            <option value="Laptop Bag"
                <?php 
                    if($row["equipment"]=='Laptop Bag')
                        {
	                        echo "selected";
                        }
                ?>>Laptop Bag</option>
            <option value="Keyboard"
                <?php 
                    if($row["equipment"]=='Keyboard')
                        {
	                        echo "selected";
                        }
                ?>>Keyboard</option>
            <option value="Modem"
                <?php 
                    if($row["equipment"]=='Modem')
                        {
	                        echo "selected";
                        }
                ?>>Modem</option>
            <option value="Cables"
                <?php 
                    if($row["equipment"]=='Cables')
                        {
	                        echo "selected";
                        }
                ?>>Cables</option>
            </select>
        </div>
        </div>
        <div class="form-group">
            <label>Make</label>
            <input type="text" name="make" class="form-control" value="<?php echo $make; ?>">
        </div>
        <div class="form-group">
            <label>Model</label>
            <input type="text" name="model" class="form-control" value="<?php echo $model; ?>">
        </div>
        <div class="form-group">
            <label>Serial</label>
            <input type="text" name="serial" class="form-control" value="<?php echo $serial; ?>">
        </div>
        <div class="form-group">
            <label>State</label>
            <select class="form-control" name = "state" value="<?php echo $state; ?>">
            <option value="New"
                <?php 
                    if($row["state"]=='New')
                        {
	                        echo "selected";
                        }
                ?>>New</option>
            <option value="Used"
                <?php 
                    if($row["state"]=='Used')
                        {
	                        echo "selected";
                        }
                ?>>Used</option>
            </select>
        </div>
        <div class="form-group">
            <label>Cost</label>
            <input type="text" name="cost" class="form-control" value="<?php echo $cost; ?>">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" value="<?php echo $date; ?>">
        </div>
        <div class="form-group">
            <label>Observations</label>
            <input type="text" name="observations" class="form-control" value="<?php echo $observations; ?>">
        </div>
        <div class="form-group">
            <label>Employee</label>
            <input type="text" name="employee" class="form-control" value="<?php echo $employee; ?>">
        </div>
        <div class="form-group">
            <label>Department</label>
            <select class="form-control" name = "department" value="<?php echo $department; ?>">
            <option value="Human Resources"
                <?php 
                    if($row["department"]=='Human Resources')
                        {
	                        echo "selected";
                        }
                ?>>Human Resources</option>
            <option value="Settlements"
                <?php 
                    if($row["department"]=='Settlements')
                        {
	                        echo "selected";
                        }
                ?>>Settlements</option>
            <option value="Information and Technology"
                <?php 
                    if($row["department"]=='Information and Technology')
                        {
	                        echo "selected";
                        }
                ?>>Information and Technology</option>
            <option value="Sales"
                <?php 
                    if($row["department"]=='Sales')
                        {
	                        echo "selected";
                        }
                ?>>Sales</option>
            <option value="Administration"
                <?php 
                    if($row["department"]=='Administration')
                        {
	                        echo "selected";
                        }
                ?>>Administration</option>
            <option value="Maintenance"
                <?php 
                    if($row["department"]=='Maintenance')
                        {
	                        echo "selected";
                        }
                ?>>Maintenance</option>
                            <option value="Safety"
                <?php 
                    if($row["department"]=='Safety')
                        {
	                        echo "selected";
                        }
                ?>>Safety</option>
                            <option value="Operations"
                <?php 
                    if($row["department"]=='Operations')
                        {
	                        echo "selected";
                        }
                ?>>Operations</option>
                            <option value="Drivers"
                <?php 
                    if($row["department"]=='Drivers')
                        {
	                        echo "selected";
                        }
                ?>>Drivers</option>
                            <option value="Contraloria"
                <?php 
                    if($row["department"]=='Contraloria')
                        {
	                        echo "selected";
                        }
                ?>>Contraloria</option>
                            <option value="Diesel"
                <?php 
                    if($row["department"]=='Diesel')
                        {
	                        echo "selected";
                        }
                ?>>Diesel</option>
            </select>
        </div>
        <div class="form-group">
            <label>Terminal</label>
            <select class="form-control" name = "terminal" value="<?php echo $terminal; ?>">
            <option value="Rio Bravo"
                <?php 
                    if($row["terminal"]=='Rio Bravo')
                        {
	                        echo "selected";
                        }
                ?>>Rio Bravo</option>
            <option value="Manzanillo"
                <?php 
                    if($row["terminal"]=='Manzanillo')
                        {
	                        echo "selected";
                        }
                ?>>Manzanillo</option>
            <option value="Cienega"
                <?php 
                    if($row["terminal"]=='Cienega')
                        {
	                        echo "selected";
                        }
                ?>>Cienega</option>
            <option value="Queretaro"
                <?php 
                    if($row["terminal"]=='Queretaro')
                        {
	                        echo "selected";
                        }
                ?>>Queretaro</option>
            <option value="Nuevo Laredo"
                <?php 
                    if($row["terminal"]=='Nuevo Laredo')
                        {
	                        echo "selected";
                        }
                ?>>Nuevo Laredo</option>
            <option value="Ciudad Juarez"
                <?php 
                    if($row["terminal"]=='Ciudad Juarez')
                        {
	                        echo "selected";
                        }
                ?>>Ciudad Juarez</option>
                            <option value="El Paso"
                <?php 
                    if($row["terminal"]=='El Paso')
                        {
	                        echo "selected";
                        }
                ?>>El Paso</option>
                            <option value="Laredo"
                <?php 
                    if($row["terminal"]=='Laredo')
                        {
	                        echo "selected";
                        }
                ?>>Laredo</option>
                            <option value="Pharr"
                <?php 
                    if($row["terminal"]=='Pharr')
                        {
	                        echo "selected";
                        }
                ?>>Pharr</option>
                            <option value="Dallas"
                <?php 
                    if($row["terminal"]=='Dallas')
                        {
	                        echo "selected";
                        }
                ?>>Dallas</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </div>
    </form>
        </div>
    </div>
</div>


<?php require '../footer.php'; ?>