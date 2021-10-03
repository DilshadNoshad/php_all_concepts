<?php include "db_con.php"; ?>
<?php include "functions.php"; ?>

<?php delete(); ?>

<?php include "includes/header.php"; ?>

<div class="container">
    <h1 class="text-center">DELETE</h1>
        <div class="col-xs-6 mt-3">
        <form action="delete.php" method="post" >
            <div class="form-group mb-3">
            <select name="id" class="form-select" aria-label="Default select example">
                <?php
                readids();
                ?>
</select>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>

<?php include "includes/footer.php"; ?>