<?php
require_once "util-db.php";
function selectGames() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT 'Date', Opponent, 'Location', Result, TeamScore, OpponentScore FROM Games;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>