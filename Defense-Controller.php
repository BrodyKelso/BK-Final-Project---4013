<?php
require_once "util-db.php";
require_once "Defense-Model.php";

$pageTitle = "Defense";
include "view-header.php";

$defenseStats = selectDefense(); 
include "Defense-View.php";


include "view-footer.php";
?>
