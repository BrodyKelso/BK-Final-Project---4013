<h1>Games</h1>
<div>
    <table>
        <thead>
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
                    <td><?php echo $game['game_id']; ?></td>
                    <td><?php echo $game['opponent_name']; ?></td>
                    <td><?php echo $game['date']; ?></td>
                    <td><?php echo $game['location']; ?></td>
                    <td><?php echo $game['result']; ?></td>
                    <td><?php echo $game['team_score']; ?></td>
                    <td><?php echo $game['opponent_score']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
