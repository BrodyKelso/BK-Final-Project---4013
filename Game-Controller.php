<?php
require_once "util-db.php";
require_once "Game-Model.php";

$pageTitle = "Games";
include "view-header.php";

$games = selectGames();

// Handle game deletion
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["actionType"] === "Delete") {
        $game_id = $_POST["game_id"];
        deleteGame($game_id);
    } elseif ($_POST["actionType"] === "Add") {
        // Handle adding a new game
    } elseif ($_POST["actionType"] === "Edit") {
        // Handle editing a game
    }
}

include "Game-View.php";
include "view-footer.php";
?>
