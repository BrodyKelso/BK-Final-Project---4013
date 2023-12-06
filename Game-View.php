<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games 2023</title>
    <!-- Link to the Vapor themed Bootstrap CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <!-- If you have additional custom styles, link them here -->
</head>
<body>
    <h1>Games List</h1>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Date</th>
                    <th>Opponent</th>
                    <th>Location</th>
                    <th>Result</th>
                    <th>Team Score</th>
                    <th>Opponent Score</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($game = $games->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $game['Date']; ?></td>
                        <td><?php echo $game['Opponent']; ?></td>
                        <td><?php echo $game['Location']; ?></td>
                        <td><?php echo $game['Result']; ?></td>
                        <td><?php echo $game['TeamScore']; ?></td>
                        <td><?php echo $game['OpponentScore']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <?php if (isset($games) && $games->num_rows === 0): ?>
        <p>No games found.</p>
    <?php endif; ?>
</body>
</html>
