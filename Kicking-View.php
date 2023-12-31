<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kicking Statistics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Kicking Statistics</h1>

        <!-- Include Add New Kicking Statistic Form -->
        <?php include "view-kicking-newform.php"; ?>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Player ID</th>
                        <th>Extra Points Made</th>
                        <th>Extra Points Attempted</th>
                        <th>Extra Point Percentage</th>
                        <th>Field Goals Made</th>
                        <th>Field Goals Attempted</th>
                        <th>Field Goal Percentage</th>
                        <th>Points</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $kickingStats->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['PlayerID']; ?></td>
                            <td><?php echo $row['ExtraPointsMade']; ?></td>
                            <td><?php echo $row['ExtraPointsAttempted']; ?></td>
                            <td><?php echo $row['ExtraPointPercentage']; ?></td>
                            <td><?php echo $row['FieldGoalsMade']; ?></td>
                            <td><?php echo $row['FieldGoalsAttempted']; ?></td>
                            <td><?php echo $row['FieldGoalPercentage']; ?></td>
                            <td><?php echo $row['Points']; ?></td>
                            <td>
                                <!-- Include Edit Form -->
                                <?php include "view-kicking-editform.php"; ?>

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
