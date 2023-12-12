<?php
require_once "util-db.php";

function selectPassing() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PlayerID, Completions, Attempts, PassingYards, CompletionPercentage, AverageYardsPerAttempt, LongestPass, Touchdowns, Interceptions, Sacks, SackYardsLost, QuarterbackRating FROM Passing;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPassing($playerID, $completions, $attempts, $passingYards, $completionPercentage, $averageYardsPerAttempt, $longestPass, $touchdowns, $interceptions, $sacks, $sackYardsLost, $quarterbackRating) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Passing` (`PlayerID`, `Completions`, `Attempts`, `PassingYards`, `CompletionPercentage`, `AverageYardsPerAttempt`, `LongestPass`, `Touchdowns`, `Interceptions`, `Sacks`, `SackYardsLost`, `QuarterbackRating`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("iiiiddiiiiid", $playerID, $completions, $attempts, $passingYards, $completionPercentage, $averageYardsPerAttempt, $longestPass, $touchdowns, $interceptions, $sacks, $sackYardsLost, $quarterbackRating);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editPassing($playerID, $completions, $attempts, $passingYards, $completionPercentage, $averageYardsPerAttempt, $longestPass, $touchdowns, $interceptions, $sacks, $sackYardsLost, $quarterbackRating) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Passing` SET `Completions` = ?, `Attempts` = ?, `PassingYards` = ?, `CompletionPercentage` = ?, `AverageYardsPerAttempt` = ?, `LongestPass` = ?, `Touchdowns` = ?, `Interceptions` = ?, `Sacks` = ?, `SackYardsLost` = ?, `QuarterbackRating` = ? WHERE `PlayerID` = ?;");
        $stmt->bind_param("iiiddiiiiidi", $completions, $attempts, $passingYards, $completionPercentage, $averageYardsPerAttempt, $longestPass, $touchdowns, $interceptions, $sacks, $sackYardsLost, $quarterbackRating, $playerID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePassing($playerID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Passing` WHERE `PlayerID` = ?;");
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
