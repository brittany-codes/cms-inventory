<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>IT Department Hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.cal th {
  height: 30px;
  text-align: center;
  font-weight: 700;
}

.cal td {
  height: 100px;
}

.today {
  background: yellow;
}

.cal th:nth-of-type(7), .cal td:nth-of-type(7) {
  color: blue;
}

.cal th:nth-of-type(1), .cal td:nth-of-type(1) {
  color: red;
}
  </style>
</head>

<body>

<!--Header Start -->
<header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">IT Department Hub</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <?php
        if(isset($_SESSION['userId'])) {
            echo '              <li>
            <a href="staffpolicies.php">Policies</a>
            </li>';
        }
        else {
            echo '              <li>
            <a href="policies.php">Policies</a>
            </li>';
        }
        ?>
                <?php
        if(isset($_SESSION['userId'])) {
            echo '              <li>
            <a href="staffforms.php">Forms</a>
            </li>';
        }
        else {
            echo '              <li>
            <a href="forms.php">Forms</a>
            </li>';
        }
        ?>
                        <?php
        if(isset($_SESSION['userId'])) {
            echo '              <li>
            <a href="staffaudits.php">Audits</a>
            </li>';
        }
        else {
          echo '              <li>
          <a href="calendar.php">Calendar</a>
          </li>';
      }
        ?>
                                <?php
        if(isset($_SESSION['userId'])) {
            echo '              <li>
            <a href="training.php">Training</a>
            </li>';
        }
        else {
          echo '              <li>
          <a href="contact.php">Contact</a>
          </li>';
        }
        ?>
        ?>
                                <?php
        if(isset($_SESSION['userId'])) {
            echo '              <li>
            <a href="inventory.php">Inventory</a>
            </li>';
        }
        ?>
                                        <?php
        if(isset($_SESSION['userId'])) {
            echo '              <li>
            <a href="users.php">Add User</a>
            </li>';
        }
        ?>
      </ul>

    <div class="navbar-right">

        <?php
        if(isset($_SESSION['userId'])) {
            echo '      <form class="form-inline" action="includes/logout.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>
      </form>';
        }
        else {
            echo '      <form class="form-inline" action="includes/login.php" method="post">
        <label class="sr-only" for="inlineForm">Email Address</label>
        <input type="text" name="mailuid" placeholder="Email Address">

        <label class="sr-only" for="inlineForm">Password</label>
        <input type="password" name="pwd" placeholder="Password">

        <button type="submit" name="login-submit">Login</button>
      </form>';
        }
        ?>




      <a href="signup.php">Sign-Up!</a>
    </div>
  </div>
</nav>
</header>

<!--Header Stop -->
