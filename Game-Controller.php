<?php
require_once "util-db.php";
require_once "Game-Model.php";

$pageTitle = "Games";
include "view-header.php";

$games = selectGames(); // Attempt to fetch games

// Check if $games is false, indicating a query error
if ($games === false) {
    error_log('selectGames() failed to execute');
    die('Error fetching games. Please check the error log.');
}

// Check if $games is null, indicating an unexpected error
if ($games === null) {
    error_log('selectGames() returned null');
    die('Error: selectGames() returned null. Please check the error log.');
}

// Check if $games has no rows, indicating no games found
if ($games->num_rows === 0) {
    error_log('No games returned from the database');
    die('No games found in the database.');
}

include "Game-View.php";    

include "view-footer.php";
?>
