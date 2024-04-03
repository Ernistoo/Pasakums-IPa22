<?php

$config = require "config.php";
require "Database.php";


$db = new Database($config);

$query_string = "SELECT * FROM pasakumi WHERE id =:id";
$params = [":id" => $_GET["id"]];
$pasakums = $db->execute($query, $params)->fetch();



require "views/posts/show.view.php";
