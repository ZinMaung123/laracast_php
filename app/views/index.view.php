<?php include "partials/head.php" ?>
    <?php if(isset($_SESSION['success'])){ ?>
        <div class="alert alert-success">
            <?= $_SESSION['success'] ?>
        </div>
    <?php } ?>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Home</h1>
            <p class="lead">This is a CMS home page.</p>
        </div>
        </div>
    </div>
<?php include "partials/footer.php" ?>