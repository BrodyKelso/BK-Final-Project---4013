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

function insertGame($game_id, $opponent_name, $date, $location, $result, $team_score, $opponent_score) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Games` (`GameID`, `Opponent`, `Date`, `Location`, `Result`, `TeamScore`, `OpponentScore`) VALUES (?, ?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("issssii", $game_id, $opponent_name, $date, $location, $result, $team_score, $opponent_score);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
