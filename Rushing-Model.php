<?php
require_once "util-db.php";

function selectRushing() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PlayerID, Carries, RushingYards, AverageYardsPerCarry, LongestRush, Touchdowns FROM Rushing;");
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


