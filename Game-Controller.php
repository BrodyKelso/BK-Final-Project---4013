<?php
require_once "util-db.php";
require_once "Game-Model.php";

$pageTitle = "Games";
include "view-header.php";

if (isset($_POST['actionType']) && $_POST['actionType'] === "Add") {
    // Ensure you have received the necessary form data.
    $game_id = $_POST['game_id'];
    $opponent_name = $_POST['opponent_name'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $result = $_POST['result'];
    $team_score = $_POST['team_score'];
    $opponent_score = $_POST['opponent_score'];

    // Call the insertGame function to add a new game.
    if (insertGame($game_id, $opponent_name, $date, $location, $result, $team_score, $opponent_score)) {
        // Game added successfully, show a success message.
        echo '<div class="alert alert-success" role="alert">Game added successfully.</div>';
    } else {
        // Failed to add game, show an error message.
        echo '<div class="alert alert-danger" role="alert">Failed to add game.</div>';
    }
}


$games = selectGames(); 
include "Game-View.php";


include "view-footer.php";
?>
