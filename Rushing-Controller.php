<?php
require_once "util-db.php";
require_once "Rushing-Model.php";

$pageTitle = "Rushing";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertRushing($_POST['playerID'], $_POST['carries'], $_POST['rushingYards'], $_POST['averageYardsPerCarry'], $_POST['longestRush'], $_POST['touchdowns'])) {
                echo '<div class="alert alert-success" role="alert">Rushing record added successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to add rushing record.</div>';
            }
            break;

        case "Edit":
            if (editRushing($_POST['playerID'], $_POST['carries'], $_POST['rushingYards'], $_POST['averageYardsPerCarry'], $_POST['longestRush'], $_POST['touchdowns'])) {
                echo '<div class="alert alert-success" role="alert">Rushing record updated successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to update rushing record.</div>';
            }
            break;

        case "Delete":
            if (deleteRushing($_POST['playerID'])) {
                echo '<div class="alert alert-success" role="alert">Rushing record deleted successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to delete rushing record.</div>';
            }
            break;
    }

    // Refresh the stats after any action
    $rushingStats = selectRushing();
}

include "Rushing-View.php";
include "view-footer.php";
?>
