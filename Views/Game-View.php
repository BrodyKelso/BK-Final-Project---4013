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
    <?php if ($games->num_rows > 0): ?>
        <!-- Use Bootstrap classes to style the table with the Vapor theme -->
        <table class="table table-hover">
            <thead class="thead-dark"> <!-- Vapor theme typically uses a dark thead -->
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
                        <td><?= htmlspecialchars($game['Date']) ?></td>
                        <td><?= htmlspecialchars($game['Opponent']) ?></td>
                        <td><?= htmlspecialchars($game['Location']) ?></td>
                        <td><?= htmlspecialchars($game['Result']) ?></td>
                        <td><?= htmlspecialchars($game['TeamScore']) ?></td>
                        <td><?= htmlspecialchars($game['OpponentScore']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No games found.</p>
    <?php endif; ?>
</body>
</html>
