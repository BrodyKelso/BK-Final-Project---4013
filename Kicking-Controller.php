<?php
require_once "util-db.php";
require_once "Kicking-Model.php";

$pageTitle = "Kicking";
include "view-header.php";

$kickingStats = selectKicking(); 
include "Kicking-View.php";


include "view-footer.php";
?>
