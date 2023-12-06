<?php
require_once "util-db.php";
function selectGames() {
    try {
        $conn = get_db_connection();
       
        $stmt = $conn->prepare("SELECT Date, Opponent, Location, Result, TeamScore, OpponentScore FROM Games;");

        if (!$stmt) {
            throw new Exception("Error preparing SQL statement: " . $conn->error);
        }

        if (!$stmt->execute()) {
            throw new Exception("Error executing SQL statement: " . $stmt->error);
        }

        $result = $stmt->get_result();

        if ($result === false) {
            throw new Exception("Error getting result set: " . $conn->error);
        }

        $conn->close();

        return $result;
        
    } catch (Exception $e) {
        // Log the error message for debugging
        error_log("selectGames() error: " . $e->getMessage());

        $conn->close(); // Close the connection in case of an error

        return null; // Return null to indicate an error
    }
}

?>