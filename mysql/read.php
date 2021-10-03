<?php include "db_con.php"; ?>
<?php include "functions.php"; ?>

<?php include "includes/header.php"; ?>
<div class="container pt-5 pb-5">
    <h1 class="text-center">READ</h1>
        <div class="p-5 mb-4 bg-light rounded-3">
            <pre>
        <?php Showalldatatoread(); ?>
            </pre>
        </div>
    </div>
 <?php include "includes/footer.php"; ?>