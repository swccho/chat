<!doctype html>
<html lang="en">
<head>
    <?php
        include '../phpGcomponent/head.php';
    ?>
    <link rel="stylesheet" href="../css/signup.css">
<body>
<!--SingUp-->
    <div class="card">
        <h1>Create Account</h1>
        <p >Already have an account?<a href="#">Sign In</a></p>
        <br>
        <form action="">
            <input type="text" placeholder="Name" class="name">
            <br>
            <input type="email" placeholder="E-mail" class="email">
            <br>

            <input type="password" placeholder="Password" class="pwd">
            <input type="password" placeholder="Password" class="Cpwd">

            <button class="btn btn-block btn-primary">Sign Up <i class="fa fa-arrow-right"></i></button>
        </form>
        <br>
        <p><input type="checkbox"> I have read and agree to the terms of Services</p>
    </div>
<!--SingUp-->
</body>
</html>