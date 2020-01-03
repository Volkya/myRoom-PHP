<?php include('partials/header.php');?>


<div class="container mt-4 col-6">
    <form action="login.php" method="post">

        <h1 class="text-center">Conectate!</h1>

        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Conectarse</button>
        </div>
    </form>
</div>
