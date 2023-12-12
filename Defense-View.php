<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defense Statistics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Defense Statistics</h1>

        <!-- Include Add New Defense Statistic Form -->
        <?php include "view-defense-newform.php"; ?>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Player ID</th>
                        <th>Solo Tackles</th>
                        <th>Assisted Tackles</th>
                        <th>Total Tackles</th>
                        <th>Sacks</th>
                        <th>Sack Yards</th>
                        <th>Interceptions</th>
                        <th>Interception Touchdowns</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $defenseStats->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['PlayerID']; ?></td>
                            <td><?php echo $row['SoloTackles']; ?></td>
                            <td><?php echo $row['AssistedTackles']; ?></td>
                            <td><?php echo $row['TotalTackles']; ?></td>
                            <td><?php echo $row['Sacks']; ?></td>
                            <td><?php echo $row['SackYards']; ?></td>
                            <td><?php echo $row['Interceptions']; ?></td>
                            <td><?php echo $row['InterceptionTouchdowns']; ?></td>
                            <td>
                                <!-- Include Edit Form -->
                                <?php include "view-defense-editform.php"; ?>

                                <!-- Delete Form -->
                                <form method="post" action="">
                                    <input type="hidden" name="playerID" value="<?php echo $row['PlayerID']; ?>">
                                    <button type="submit" name="actionType" value="Delete" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
