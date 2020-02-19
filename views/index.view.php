<?php include "partials/head.php" ?>
    <h1>Home</h1>
    <ul>
        <?php foreach($tasks as $task): ?>
            <li><?= $task->description ?>
        <?php endforeach ?>
    </ul>
<?php include "partials/footer.php" ?>