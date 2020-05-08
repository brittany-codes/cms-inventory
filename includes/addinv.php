<?php
require 'dbconnect.php';


if (isset($_POST['save'])) {
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

    $conn->query("INSERT INTO inventory(equipment, make, model, serial, state, cost, date, observations, employee, department, terminal) 
    VALUES('$equipment', '$make', '$model','$serial', '$state', '$cost', '$date', '$observations', '$employee', '$department','$terminal')") or
    die($conn->error);


    header("Location: ../inventory.php");
}

?>

<?php require '../header.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Add Inventory</h2>
        </div>
        <div class="card-body">
            <form action = "" method="POST">
        <div class="form-group">
            <label>Equipment</label>
            <select class="form-control" name = "equipment">
                <option value="Laptop">Laptop</option>
                <option value="Desktop">Desktop</option>
                <option value="Mouse">Mouse</option>
                <option value="Phone Extension">Phone Extension</option>
                <option value="Phone Charger">Phone Charger</option>
                <option value="Cell Phone">Cell Phone</option>
                <option value="Tablet">Tablet</option>
                <option value="Monitor">Monitor</option>
                <option value="Laptop Bag">Laptop Bag</option>
                <option value="Keyboard">Keyboard</option>
                <option value="Modem">Modem</option>
                <option value="Cables">Cables</option>
            </select>
        </div>
        <div class="form-group">
            <label>Make</label>
            <input type="text" name="make" class="form-control">
        </div>
        <div class="form-group">
            <label>Model</label>
            <input type="text" name="model" class="form-control">
        </div>
        <div class="form-group">
            <label>Serial</label>
            <input type="text" name="serial" class="form-control">
        </div>
        <div class="form-group">
            <label>New/Used</label>
            <select class="form-control" name = "state">
                <option value="New">New</option>
                <option value="Used">Used</option>
            </select>
        </div>
        <div class="form-group">
            <label>Cost</label>
            <input type="text" name="cost" class="form-control">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label>Observations</label>
            <input type="text" name="observations" class="form-control">
        </div>
        <div class="form-group">
            <label>Employee</label>
            <input type="text" name="employee" class="form-control">
        </div>
        <div class="form-group">
            <label>Department</label>
            <select class="form-control" name = "department">
                <option value="Human Resources">Human Resources</option>
                <option value="Settlements">Settlements</option>
                <option value="Information and Technology">Information and Technology</option>
                <option value="Sales">Sales</option>
                <option value="Administration">Administration</option>
                <option value="Maintenance">Maintenance</option>
                <option value="Safety">Safety</option>
                <option value="Operations">Operations</option>
                <option value="Drivers">Drivers</option>
                <option value="Contraloria">Contraloria</option>
                <option value="Diesel">Diesel</option>
            </select>
        </div>
        <div class="form-group">
            <label>Terminal</label>
            <select class="form-control" name = "terminal">
                <option value="Rio Bravo">Rio Bravo</option>
                <option value="Manzanillo">Manzanillo</option>
                <option value="Cienega">Cienega</option>
                <option value="Queretaro">Queretaro</option>
                <option value="Nuevo Laredo">Nuevo Laredo</option>
                <option value="Ciudad Juarez">Ciudad Juarez</option>
                <option value="El Paso">El Paso</option>
                <option value="Laredo">Laredo</option>
                <option value="Pharr">Pharr</option>
                <option value="Dallas">Dallas</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Submit</button>
        </div>
    </form>
        </div>
    </div>
</div>