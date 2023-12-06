<?php
require_once "util-db.php";
require_once "Rushing-Model.php";

$pageTitle = "Passing";
include "view-header.php";

$rushingStats = selectPassing(); 
include "Rushing-View.php";


include "view-footer.php";
?>
