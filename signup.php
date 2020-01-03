<?php

require('database.php');

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password']) ){
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if($stmt->execute()){
        $message = 'Successfully created new user';
    }else{
        $message = 'Sorry there must have been an issue creating your account';
    }

} // end if main
?>


<!doctype html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
<?php include('partials/header.php');?>


<?php if (!empty($message)): ?>
<!--interpreta esta variable =-->
    <p><?= $message ?></p>
<?php endif; ?>




<div class="container mt-4 col-6">

    <h1 class="text-center">Registrate</h1>

    <form action="signup.php" method="POST">

        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" name="username" type="text" placeholder="Enter your username">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" name="email" type="text" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" name="password" type="password" placeholder="Enter your Password">
        </div>

        <div class="form-group">
            <label for="password">Confirm your password</label>
            <input class="form-control" name="confirm_password" type="password" placeholder="Confirm your Password">
        </div>

        <input type="submit" value="Submit">
        <!--      <div class="form-group text-center">-->
        <!--          <button type="submit" class="btn btn-primary">Sign up</button>-->
        <!--      </div>-->

    </form>
</div>




</body>
</html>
    
