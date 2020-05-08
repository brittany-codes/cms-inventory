
<?php
    include('header.php');
?>

<!-- body content -->

<main>
    <div class="container-fluid text-center">
            <div class="row content">
            <h1>Sign-Up</h1>
                <form action="includes/signup.php" method="post">
                    <input type="text" name="uid" placeholder="Username"><br>
                    <input type="text" name="mailuid" placeholder="Email Address"><br>
                    <input type="password" name="pwd" placeholder="Password"><br>
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password"><br>
                    <button type="submit" name="signup-submit">Sign-Up</button>
                </form>
  </div>
</main>

<!-- footer info -->
<?php
    include('footer.php');
?>
