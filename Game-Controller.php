<?php
require_once "util-db.php";
require_once "Game-Model.php";

$pageTitle = "Games";
include "view-header.php";

$games = selectGames(); // Make sure this is fetching data

if ($games === false) {
    die("Error fetching games."); // Add error handling
}

include "Game-View.php";    

include "view-footer.php";
?>
