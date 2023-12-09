<?php
require_once "util-db.php";
require_once "Game-Model.php";

$pageTitle = "Games";
include "view-header.php";

$games = selectGames();

// Handle game actions (Add, Edit, Delete)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $actionType = $_POST["actionType"];
    
    if ($actionType === "Add") {
        // Handle adding a new game
        $game_id = $_POST["game_id"];
        $opponent_name = $_POST["opponent_name"];
        $date = $_POST["date"];
        $location = $_POST["location"];
        $result = $_POST["result"];
        $team_id = $_POST["team_id"];
        
        insertGame($game_id, $opponent_name, $date, $location, $result, $team_id);
    } elseif ($actionType === "Edit") {
        // Handle editing a game
        $game_id = $_POST["game_id"];
        $opponent_name = $_POST["opponent_name"];
        $date = $_POST["date"];
        $location = $_POST["location"];
        $result = $_POST["result"];
        $team_id = $_POST["team_id"];
        
        editGame($game_id, $opponent_name, $date, $location, $result, $team_id);
    } elseif ($actionType === "Delete") {
        // Handle deleting a game
        $game_id = $_POST["game_id"];
        deleteGame($game_id);
    }
}

include "Game-View.php";
include "view-footer.php";
?>
