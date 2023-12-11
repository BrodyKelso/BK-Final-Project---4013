<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Players</h1>
        <?php include "view-player-newform.php"; ?>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>PlayerID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Jersey Number</th>
                        <th>Team</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>Year</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($player = $players->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $player['PlayerID']; ?></td>
                            <td><?php echo $player['Name']; ?></td>
                            <td><?php echo $player['Position']; ?></td>
                            <td><?php echo $player['JerseyNumber']; ?></td>
                            <td><?php echo $player['Team']; ?></td>
                            <td><?php echo $player['Height']; ?></td>
                            <td><?php echo $player['Weight']; ?></td>
                            <td><?php echo $player['Year']; ?></td>
                            <td>
                                <?php include "view-player-editform.php"; ?>
                                <form method="post" action="">
                                    <input type="hidden" name="playerID" value="<?php echo $player['PlayerID']; ?>">
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
