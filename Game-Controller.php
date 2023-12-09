<?php
require_once("util-db.php");
require_once("model-games.php");

$pageTitle = "Games";
include "view-header.php";

if (isset($_POST['actionType']))
{
    switch ($_POST['actionType'])
    {
        case "Add":
            if (insertGame($_POST['GameID'], $_POST['Opponent'], $_POST['Date'], $_POST['Location'], $_POST['Result'], $_POST['TeamScore'], $_POST['OpponentScore']))
            {
                echo '<div class="alert alert-success" role="alert">Game added successfully.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to add game.</div>';
            }
            break;

        case "Edit":
            if (editGame($_POST['GameID'], $_POST['Opponent'], $_POST['Date'], $_POST['Location'], $_POST['Result'], $_POST['TeamScore'], $_POST['OpponentScore']))
            {
                echo '<div class="alert alert-success" role="alert">Game updated successfully.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to update game.</div>';
            }
            break;

        case "Delete":
            if (deleteGame($_POST['game_id']))
            {
                echo '<div class="alert alert-success" role="alert">Game deleted successfully.</div>';
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Failed to delete game.</div>';
            }
            break;
    }
}

$games = selectGames();
include "view-games.php";
include "view-footer.php";
?>