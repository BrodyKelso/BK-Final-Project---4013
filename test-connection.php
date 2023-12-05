<?php
require_once "util-db.php";

function testDatabaseConnection() {
    try {
        $conn = get_db_connection();
        echo 'Connected successfully to the database server.';

        // Perform a simple query - for example, "SELECT 1"
        $result = $conn->query("SELECT 1");
        if ($result) {
            echo 'Query executed successfully.';
            // Optionally, fetch the result and print it.
            $data = $result->fetch_assoc();
            echo ' Data: ' . $data[1];
        } else {
            echo 'Query failed: ' . $conn->error;
        }

        $conn->close();
    } catch (Exception $e) {
        echo 'Database connection test failed with exception: ' . $e->getMessage();
    }
}

// Call the test function
testDatabaseConnection();
?>
