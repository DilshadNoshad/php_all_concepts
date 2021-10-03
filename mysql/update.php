<?php include "db_con.php"; ?>
<?php include "functions.php"; ?>

<?php Update(); ?>

<?php include "includes/header.php"; ?>

<div class="container">
    <h1 class="text-center">UPDATE</h1>
        <div class="col-xs-6 mt-3">
        <form action="update.php" method="post" >
            <div class="form-group mb-3">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group mb-3">
            <select name="id" class="form-select" aria-label="Default select example">
                <?php
                readids();
                ?>
</select>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Update">
        </form>

<?php include "includes/footer.php"; ?>