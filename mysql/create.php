<?php include "db_con.php"; ?>
<?php include "functions.php"; ?>

<?php create(); ?>

<?php include 'includes/header.php' ?>

    <div class="container pt-5 pb-5">
        <h1 class="text-center">CREATE</h1>
        <div class="col-xs-6 mt-3">
        <form action="create.php" method="post" >
            <div class="form-group mb-3">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
        </form>
        </div>
    </div>
    
<?php include 'includes/footer.php' ?>