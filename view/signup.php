

<!--VISTA-->

<?php include('../partials/header.php');?>


<?php if (!empty($message)): ?>
<!--interpreta esta variable =-->
    <p><?= $message ?></p>
<?php endif; ?>

<div class="container mt-4 col-6">

    <h1 class="text-center">Registrate</h1>

    <form action="/controller/signup.php" method="POST">

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


              <div class="form-group text-center">
        <input type="submit" value="Sign up" class="btn btn-primary">
        <!--          <button type="submit" class="btn btn-primary">Sign up</button>-->
              </div>

    </form>
</div>


<?php include '../partials/footer.php' ?>
    
