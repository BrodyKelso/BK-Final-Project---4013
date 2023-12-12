<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Statistics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Passing Statistics</h1>
        <?php include "view-passing-newform.php"; ?>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Player ID</th>
                        <th>Completions</th>
                        <th>Attempts</th>
                        <th>Passing Yards</th>
                        <th>Completion Percentage</th>
                        <th>Average Yards Per Attempt</th>
                        <th>Longest Pass</th>
                        <th>Touchdowns</th>
                        <th>Interceptions</th>
                        <th>Sacks</th>
                        <th>Sack Yards Lost</th>
                        <th>Quarterback Rating</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $passingStats->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['PlayerID']; ?></td>
                            <td><?php echo $row['Completions']; ?></td>
                            <td><?php echo $row['Attempts']; ?></td>
                            <td><?php echo $row['PassingYards']; ?></td>
                            <td><?php echo $row['CompletionPercentage']; ?></td>
                            <td><?php echo $row['AverageYardsPerAttempt']; ?></td>
                            <td><?php echo $row['LongestPass']; ?></td>
                            <td><?php echo $row['Touchdowns']; ?></td>
                            <td><?php echo $row['Interceptions']; ?></td>
                            <td><?php echo $row['Sacks']; ?></td>
                            <td><?php echo $row['SackYardsLost']; ?></td>
                            <td><?php echo $row['QuarterbackRating']; ?></td>
                            <td>
                                <?php include "view-passing-editform.php"; ?>
                                <form method="post" action="">
                                    <input type="hidden" name="playerID" value="<?php echo $row['PlayerID']; ?>">
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
