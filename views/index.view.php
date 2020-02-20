<?php include "partials/head.php" ?>
    <h1>Home</h1>
    <ul>
        <?php foreach($tasks as $task): ?>
            <li><?= $task->description ?>
        <?php endforeach ?>
    </ul>
    
    <h1>User</h1>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?= $user->name ?>
        <?php endforeach ?>
    </ul>

    <form method='POST' action="/names">
        <input type=text name="name">
        <button type=submit>Submit</button>
    </form>
<?php include "partials/footer.php" ?>