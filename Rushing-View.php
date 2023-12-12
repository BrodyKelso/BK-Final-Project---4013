<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rushing Stats</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Rushing Statistics</h1>

        <!-- Include Add New Rushing Statistic Form -->
        <?php include "view-rushing-newform.php"; ?>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Player ID</th>
                        <th>Carries</th>
                        <th>Rushing Yards</th>
                        <th>Average Yards Per Carry</th>
                        <th>Longest Rush</th>
                        <th>Touchdowns</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $rushingStats->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['PlayerID']; ?></td>
                            <td><?php echo $row['Carries']; ?></td>
                            <td><?php echo $row['RushingYards']; ?></td>
                            <td><?php echo $row['AverageYardsPerCarry']; ?></td>
                            <td><?php echo $row['LongestRush']; ?></td>
                            <td><?php echo $row['Touchdowns']; ?></td>
                            <td>
                                <!-- Include Edit Form -->
                                <?php include "view-rushing-editform.php"; ?>

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
