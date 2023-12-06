<?php
require_once "util-db.php";
require_once "Player-Model.php";

$pageTitle = "Player Roster";
include "view-header.php";

$games = selectPlayers(); 
include "Player-View.php";


include "view-footer.php";
?>
