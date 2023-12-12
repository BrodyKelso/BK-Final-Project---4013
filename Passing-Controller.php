<?php
require_once "util-db.php";
require_once "Passing-Model.php";

$pageTitle = "Passing";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertPassing($_POST['playerID'], $_POST['completions'], $_POST['attempts'], $_POST['passingYards'], $_POST['completionPercentage'], $_POST['averageYardsPerAttempt'], $_POST['longestPass'], $_POST['touchdowns'], $_POST['interceptions'], $_POST['sacks'], $_POST['sackYardsLost'], $_POST['quarterbackRating'])) {
                echo '<div class="alert alert-success" role="alert">Player added successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to add player.</div>';
            }
            break;

        case "Edit":
            if (editPassing($_POST['playerID'], $_POST['completions'], $_POST['attempts'], $_POST['passingYards'], $_POST['completionPercentage'], $_POST['averageYardsPerAttempt'], $_POST['longestPass'], $_POST['touchdowns'], $_POST['interceptions'], $_POST['sacks'], $_POST['sackYardsLost'], $_POST['quarterbackRating'])) {
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



$passingStats = selectPassing(); 
include "Passing-View.php";


include "view-footer.php";
?>
