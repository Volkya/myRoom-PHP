<!--VISTA-->

<?php require 'partials/header.php' ?>


<!--    si estas conectado mostra esto -->
    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="controller/logout.php">
        Logout
      </a>
<!--    si no estas conectado mostra esto-->
    <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="controller/login.php">Login</a> or
      <a href="view/signup.php">SignUp</a>
    <?php endif; ?>


<?php require 'partials/footer.php' ?>