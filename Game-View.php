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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newGamesModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
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
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newGamesModal" tabindex="-1" aria-labelledby="newGamesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="newGamesModalLabel">New Game</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="game_id" class="form-label">Game ID</label>
                            <input type="text" class="form-control" id="game_id" name="game_id">
                        </div>
                        <div class="mb-3">
                            <label for="opponent_name" class="form-label">Opponent Name</label>
                            <input type="text" class="form-control" id="opponent_name" name="opponent_name">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location">
                        </div>
                        <div class="mb-3">
                            <label for="result" class="form-label">Result</label>
                            <input type="text" class="form-control" id="result" name="result">
                        </div>
                        <div class="mb-3">
                            <label for="team_score" class="form-label">Team Score</label>
                            <input type="text" class="form-control" id="team_score" name="team_score">
                        </div>
                        <div class="mb-3">
                            <label for="opponent_score" class="form-label">Opponent Score</label>
                            <input type="text" class="form-control" id="opponent_score" name="opponent_score">
                        </div>
                        <input type="hidden" name="actionType" value="Add">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JavaScript dependencies (jQuery, Popper.js, Bootstrap JS) from CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
