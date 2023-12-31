<?php
require_once "util-db.php";

function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PlayerID, Name, Position, JerseyNumber, Team, Height, Weight, Year FROM Player;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayer($name, $position, $jerseyNumber, $team, $height, $weight, $year) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Player` (`Name`, `Position`, `JerseyNumber`, `Team`, `Height`, `Weight`, `Year`) VALUES (?, ?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("ssisiii", $name, $position, $jerseyNumber, $team, $height, $weight, $year);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editPlayer($playerID, $name, $position, $jerseyNumber, $team, $height, $weight, $year) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Player` SET `Name` = ?, `Position` = ?, `JerseyNumber` = ?, `Team` = ?, `Height` = ?, `Weight` = ?, `Year` = ? WHERE `PlayerID` = ?;");
        $stmt->bind_param("ssissisi", $name, $position, $jerseyNumber, $team, $height, $weight, $year, $playerID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayer($playerID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Player` WHERE `PlayerID` = ?;");
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
