<?php
require_once "util-db.php";
require_once "Game-Model.php";


$pageTitle = "Games";
include "view-header.php";

$games = selectGames();
if ($games === false) {
    die("Error: selectGames() returned false.");
}
if ($games->num_rows == 0) {
    die("No games returned from the database.");
}

include "Game-View.php";    

include "view-footer.php";
?>
