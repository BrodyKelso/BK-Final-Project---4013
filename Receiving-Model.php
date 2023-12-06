<?php
require_once "util-db.php";

function selectReceiving() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PlayerID, Receptions, ReceivingYards, AverageYardsPerReception, LongestReception, Touchdowns FROM Receiving;");
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


