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

function insertRushing($playerID, $carries, $rushingYards, $averageYardsPerCarry, $longestRush, $touchdowns) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Rushing` (`PlayerID`, `Carries`, `RushingYards`, `AverageYardsPerCarry`, `LongestRush`, `Touchdowns`) VALUES (?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("iiidii", $playerID, $carries, $rushingYards, $averageYardsPerCarry, $longestRush, $touchdowns);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editRushing($playerID, $carries, $rushingYards, $averageYardsPerCarry, $longestRush, $touchdowns) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Rushing` SET `Carries` = ?, `RushingYards` = ?, `AverageYardsPerCarry` = ?, `LongestRush` = ?, `Touchdowns` = ? WHERE `PlayerID` = ?;");
        $stmt->bind_param("iidiii", $carries, $rushingYards, $averageYardsPerCarry, $longestRush, $touchdowns, $playerID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteRushing($playerID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Rushing` WHERE `PlayerID` = ?;");
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
