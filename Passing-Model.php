<?php
require_once "util-db.php";

function selectPassing() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PlayerID, Completions, Attempts, PassingYards, CompletionPercentage, AverageYardsPerAttempt, LongestPass, Touchdowns, Interceptions, Sacks, SackYardsLost, QuarterbackRating FROM Passing;");
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


