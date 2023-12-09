<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <!-- Link to Bootstrap CSS from a CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Games</h1>

        <!-- Add Button -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGamesModal">
            Add Game
        </button>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>GameID</th>
                        <th>Opponent Name</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Result</th>
                        <th>Team Score</th>
                        <th>Opponent Score</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($game = $games->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $game['GameID']; ?></td>
                            <td><?php echo $game['Opponent']; ?></td>
                            <td><?php echo $game['Date']; ?></td>
                            <td><?php echo $game['Location']; ?></td>
                            <td><?php echo $game['Result']; ?></td>
                            <td><?php echo $game['TeamScore']; ?></td>
                            <td><?php echo $game['OpponentScore']; ?></td>
                            <td>
                                <!-- Edit Button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editGamesModal-<?php echo $game['GameID']; ?>">
                                    Edit
                                </button>

                                <!-- Delete Button -->
                                <form method="post" action="">
                                    <input type="hidden" name="game_id" value="<?php echo $game['GameID']; ?>">
                                    <button type="submit" name="actionType" value="Delete" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Include Bootstrap JavaScript dependencies (jQuery, Popper.js, Bootstrap JS) from CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Add Game Modal -->
    <div class="modal fade" id="addGamesModal" tabindex="-1" aria-labelledby="addGamesModalLabel" aria-hidden="true">
        <!-- Add your add game form here -->
    </div>

    <!-- Edit Game Modals (One for each game) -->
    <?php while ($game = $games->fetch_assoc()) { ?>
        <div class="modal fade" id="editGamesModal-<?php echo $game['GameID']; ?>" tabindex="-1" aria-labelledby="editGamesModalLabel" aria-hidden="true">
            <!-- Add your edit game form for GameID <?php echo $game['GameID']; ?> here -->
        </div>
    <?php } ?>
</body>
</html>
