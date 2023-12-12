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

function insertReceiving($playerID, $receptions, $receivingYards, $averageYardsPerReception, $longestReception, $touchdowns) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Receiving` (`PlayerID`, `Receptions`, `ReceivingYards`, `AverageYardsPerReception`, `LongestReception`, `Touchdowns`) VALUES (?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("iiidii", $playerID, $receptions, $receivingYards, $averageYardsPerReception, $longestReception, $touchdowns);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editReceiving($playerID, $receptions, $receivingYards, $averageYardsPerReception, $longestReception, $touchdowns) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Receiving` SET `Receptions` = ?, `ReceivingYards` = ?, `AverageYardsPerReception` = ?, `LongestReception` = ?, `Touchdowns` = ? WHERE `PlayerID` = ?;");
        $stmt->bind_param("iidiii", $receptions, $receivingYards, $averageYardsPerReception, $longestReception, $touchdowns, $playerID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteReceiving($playerID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Receiving` WHERE `PlayerID` = ?;");
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
