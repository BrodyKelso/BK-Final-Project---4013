<?php
require_once "util-db.php";

function selectDefense() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PlayerID, SoloTackles, AssistedTackles, TotalTackles, Sacks, SackYards, Interceptions, InterceptionTouchdowns FROM Defense;");
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


