<?php require "components/head.php" ?>

<h1>Labrīt</h1>
<?php foreach ($posts as $post) { ?>
    <li> <?= $post["title"] ?> </li>
<?php } ?>
<?php require "components/footer.php" ?>