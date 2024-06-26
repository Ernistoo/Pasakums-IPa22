<?php

$config = require "config.php";
require "Database.php";

$db = new Database($config);

$query_string = "SELECT * FROM pasakumi";
$params = [];
if (isset($_GET["id"]) && $_GET["id"] != "") {
    // .= paņem iepriekšējo vērtību un pieliek WHERE klāt ❤️
    $query_string .= " WHERE id=:id";
    $params[":id"] = $_GET["id"];
}

// if (isset($_GET["category"]) && $_GET["category"] != "") {
//     // .= paņem iepriekšējo vērtību un pieliek WHERE klāt ❤️
//     $query_string .= " JOIN categories ON posts.category_id = categories.id WHERE categories.name=:category";
//     $params[":category"] = $_GET["category"];
// }
$pasakumi = $db->execute($query_string, $params);

$page_title = "Pasakumi";

require "views/index.view.php";
