<?php
require_once "util-db.php";
require_once "Rushing-Model.php";

$pageTitle = "Rushing";
include "view-header.php";

$rushingStats = selectRushing(); 
include "Rushing-View.php";


include "view-footer.php";
?>
