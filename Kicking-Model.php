<?php
require_once "util-db.php";

function selectKicking() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PlayerID, ExtraPointsMade, ExtraPointsAttempted, ExtraPointPercentage, FieldGoalsMade, FieldGoalsAttempted, FieldGoalPercentage, Points FROM Kicking;");
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


