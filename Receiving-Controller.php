<?php
require_once "util-db.php";
require_once "Receiving-Model.php";

$pageTitle = "Receiving";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            // Extract data from $_POST and call insertReceiving
            if (insertReceiving($_POST['playerID'], $_POST['receptions'], $_POST['receivingYards'], $_POST['averageYardsPerReception'], $_POST['longestReception'], $_POST['touchdowns'])) {
                echo '<div class="alert alert-success" role="alert">Receiving statistic added successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to add receiving statistic.</div>';
            }
            break;

        case "Edit":
            // Extract data from $_POST and call editReceiving
            if (editReceiving($_POST['playerID'], $_POST['receptions'], $_POST['receivingYards'], $_POST['averageYardsPerReception'], $_POST['longestReception'], $_POST['touchdowns'])) {
                echo '<div class="alert alert-success" role="alert">Receiving statistic updated successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to update receiving statistic.</div>';
            }
            break;

        case "Delete":
            // Extract playerID from $_POST and call deleteReceiving
            if (deleteReceiving($_POST['playerID'])) {
                echo '<div class="alert alert-success" role="alert">Receiving statistic deleted successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to delete receiving statistic.</div>';
            }
            break;
    }
}

$receivingStats = selectReceiving(); 
include "Receiving-View.php";
include "view-footer.php";
?>
