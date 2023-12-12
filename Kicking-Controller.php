<?php
require_once "util-db.php";
require_once "Kicking-Model.php";

$pageTitle = "Kicking";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertKicking($_POST['playerID'], $_POST['extraPointsMade'], $_POST['extraPointsAttempted'], $_POST['extraPointPercentage'], $_POST['fieldGoalsMade'], $_POST['fieldGoalsAttempted'], $_POST['fieldGoalPercentage'], $_POST['points'])) {
                echo '<div class="alert alert-success" role="alert">Kicking record added successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to add kicking record.</div>';
            }
            break;

        case "Edit":
            if (editKicking($_POST['playerID'], $_POST['extraPointsMade'], $_POST['extraPointsAttempted'], $_POST['extraPointPercentage'], $_POST['fieldGoalsMade'], $_POST['fieldGoalsAttempted'], $_POST['fieldGoalPercentage'], $_POST['points'])) {
                echo '<div class="alert alert-success" role="alert">Kicking record updated successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to update kicking record.</div>';
            }
            break;

        case "Delete":
            if (deleteKicking($_POST['playerID'])) {
                echo '<div class="alert alert-success" role="alert">Kicking record deleted successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to delete kicking record.</div>';
            }
            break;
    }


}

$kickingStats = selectKicking();
include "Kicking-View.php";
include "view-footer.php";
?>
