<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Roster</title>
    <!-- Link to Bootstrap CSS from a CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <h1>Player Roster</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Player ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Jersey Number</th>
                        <th>Team</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $playerRoster->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['PlayerID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Position']; ?></td>
                            <td><?php echo $row['JerseyNumber']; ?></td>
                            <td><?php echo $row['Team']; ?></td>
                            <td><?php echo $row['Height']; ?></td>
                            <td><?php echo $row['Weight']; ?></td>
                            <td><?php echo $row['Year']; ?></td>
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
