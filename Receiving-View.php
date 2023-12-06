<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiving Stats</title>
    <!-- Link to Bootstrap CSS from a CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php include "view-header.php"; // Include the navbar from view-header.php ?>

        <h1>Receiving Statistics</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Player ID</th>
                        <th>Receptions</th>
                        <th>Receiving Yards</th>
                        <th>Average Yards Per Reception</th>
                        <th>Longest Reception</th>
                        <th>Touchdowns</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $receivingStats->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['PlayerID']; ?></td>
                            <td><?php echo $row['Receptions']; ?></td>
                            <td><?php echo $row['ReceivingYards']; ?></td>
                            <td><?php echo $row['AverageYardsPerReception']; ?></td>
                            <td><?php echo $row['LongestReception']; ?></td>
                            <td><?php echo $row['Touchdowns']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Include Bootstrap JavaScript dependencies (jQuery, Popper.js, Bootstrap JS) from CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>