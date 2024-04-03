<?php require "components/head.php" ?>


<ul>
    <li class="anal"><a href="#home">Home</a></li>
    <li class="anal"><a href="#news">News</a></li>
    <li class="anal"><a href="#contact">Contact</a></li>
    <li class="anal"><a href="#about">About</a></li>
</ul>
<h1><?= $page_title ?></h1>
<?php foreach ($pasakumi as $pasakums) { ?>
    <li class="mjau"> <?= $pasakums["nosaukums"] ?> </li>
<?php } ?>
<?php require "components/footer.php" ?>