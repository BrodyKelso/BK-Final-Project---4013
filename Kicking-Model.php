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

function insertKicking($playerID, $extraPointsMade, $extraPointsAttempted, $extraPointPercentage, $fieldGoalsMade, $fieldGoalsAttempted, $fieldGoalPercentage, $points) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Kicking` (`PlayerID`, `ExtraPointsMade`, `ExtraPointsAttempted`, `ExtraPointPercentage`, `FieldGoalsMade`, `FieldGoalsAttempted`, `FieldGoalPercentage`, `Points`) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("iiidiiid", $playerID, $extraPointsMade, $extraPointsAttempted, $extraPointPercentage, $fieldGoalsMade, $fieldGoalsAttempted, $fieldGoalPercentage, $points);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editKicking($playerID, $extraPointsMade, $extraPointsAttempted, $extraPointPercentage, $fieldGoalsMade, $fieldGoalsAttempted, $fieldGoalPercentage, $points) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Kicking` SET `ExtraPointsMade` = ?, `ExtraPointsAttempted` = ?, `ExtraPointPercentage` = ?, `FieldGoalsMade` = ?, `FieldGoalsAttempted` = ?, `FieldGoalPercentage` = ?, `Points` = ? WHERE `PlayerID` = ?;");
        $stmt->bind_param("iidiiiid", $extraPointsMade, $extraPointsAttempted, $extraPointPercentage, $fieldGoalsMade, $fieldGoalsAttempted, $fieldGoalPercentage, $points, $playerID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteKicking($playerID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Kicking` WHERE `PlayerID` = ?;");
        $stmt->bind_param("i", $playerID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
