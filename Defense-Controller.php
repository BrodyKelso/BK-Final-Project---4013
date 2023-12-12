<?php
require_once "util-db.php";
require_once "Defense-Model.php";

$pageTitle = "Defense";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertDefense($_POST['playerID'], $_POST['soloTackles'], $_POST['assistedTackles'], $_POST['totalTackles'], $_POST['sacks'], $_POST['sackYards'], $_POST['interceptions'], $_POST['interceptionTouchdowns'])) {
                echo '<div class="alert alert-success" role="alert">Defense record added successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to add defense record.</div>';
            }
            break;

        case "Edit":
            if (editDefense($_POST['playerID'], $_POST['soloTackles'], $_POST['assistedTackles'], $_POST['totalTackles'], $_POST['sacks'], $_POST['sackYards'], $_POST['interceptions'], $_POST['interceptionTouchdowns'])) {
                echo '<div class="alert alert-success" role="alert">Defense record updated successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to update defense record.</div>';
            }
            break;

        case "Delete":
            if (deleteDefense($_POST['playerID'])) {
                echo '<div class="alert alert-success" role="alert">Defense record deleted successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to delete defense record.</div>';
            }
            break;
    }


}
$defenseStats = selectDefense();
include "Defense-View.php";
include "view-footer.php";
?>
