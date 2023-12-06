<?php
require_once "util-db.php";
require_once "Receiving-Model.php";

$pageTitle = "Receiving";
include "view-header.php";

$games = selectReceiving(); 
include "Receiving-View.php";


include "view-footer.php";
?>
