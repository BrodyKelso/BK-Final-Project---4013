<?php
require_once "util-db.php";
require_once "Passing-Model.php";

$pageTitle = "Passing";
include "view-header.php";

$passingStats = selectPassing(); 
include "Passing-View.php";


include "view-footer.php";
?>
