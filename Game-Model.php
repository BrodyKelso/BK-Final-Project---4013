<?php
require_once "util-db.php";

function selectGames() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT GameID, Date, Opponent, Location, Result, TeamScore, OpponentScore FROM Games;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertGame($opponent_name, $date, $location, $result, $team_score, $opponent_score) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Games` (`Opponent`, `Date`, `Location`, `Result`, `TeamScore`, `OpponentScore`) VALUES (?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("ssssii", $opponent_name, $date, $location, $result, $team_score, $opponent_score);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editGame($game_id, $opponent_name, $date, $location, $result, $team_score, $opponent_score) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Games` SET `Opponent` = ?, `Date` = ?, `Location` = ?, `Result` = ?, `TeamScore` = ?, `OpponentScore` = ? WHERE `GameID` = ?;");
        $stmt->bind_param("ssssiii", $opponent_name, $date, $location, $result, $team_score, $opponent_score, $game_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteGame($game_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Games WHERE GameID = ?");
        $stmt->bind_param("i", $game_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
