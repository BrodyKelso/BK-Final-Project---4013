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

function insertDefense($playerID, $soloTackles, $assistedTackles, $totalTackles, $sacks, $sackYards, $interceptions, $interceptionTouchdowns) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Defense` (`PlayerID`, `SoloTackles`, `AssistedTackles`, `TotalTackles`, `Sacks`, `SackYards`, `Interceptions`, `InterceptionTouchdowns`) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("iiiidiii", $playerID, $soloTackles, $assistedTackles, $totalTackles, $sacks, $sackYards, $interceptions, $interceptionTouchdowns);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editDefense($playerID, $soloTackles, $assistedTackles, $totalTackles, $sacks, $sackYards, $interceptions, $interceptionTouchdowns) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Defense` SET `SoloTackles` = ?, `AssistedTackles` = ?, `TotalTackles` = ?, `Sacks` = ?, `SackYards` = ?, `Interceptions` = ?, `InterceptionTouchdowns` = ? WHERE `PlayerID` = ?;");
        $stmt->bind_param("iiidiiii", $soloTackles, $assistedTackles, $totalTackles, $sacks, $sackYards, $interceptions, $interceptionTouchdowns, $playerID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteDefense($playerID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Defense` WHERE `PlayerID` = ?;");
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
