<?php
require_once "util-db.php";
require_once "Game-Model.php";


$pageTitle = "Games";
include "view-header.php";

$games = selectGames();

include "Game-View.php";    

include "view-footer.php";
?>