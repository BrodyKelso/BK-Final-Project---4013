<?php
require_once("util-db.php");
require_once("Player-Model.php");

$pageTitle = "Players";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertPlayer($_POST['name'], $_POST['position'], $_POST['jerseyNumber'], $_POST['team'], $_POST['height'], $_POST['weight'], $_POST['year'])) {
                echo '<div class="alert alert-success" role="alert">Player added successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to add player.</div>';
            }
            break;

        case "Edit":
            if (editPlayer($_POST['playerID'], $_POST['name'], $_POST['position'], $_POST['jerseyNumber'], $_POST['team'], $_POST['height'], $_POST['weight'], $_POST['year'])) {
                echo '<div class="alert alert-success" role="alert">Player updated successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to update player.</div>';
            }
            break;

        case "Delete":
            if (deletePlayer($_POST['playerID'])) {
                echo '<div class="alert alert-success" role="alert">Player deleted successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to delete player.</div>';
            }
            break;
    }
}

$players = selectPlayers();
include "Player-View.php";
include "view-footer.php";
?>
