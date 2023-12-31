<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Games</h1>
        <?php include "view-games-newform.php"; ?>

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
                                <?php include "view-games-editform.php"; ?>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
