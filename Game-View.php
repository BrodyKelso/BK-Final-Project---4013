<h1>Games</h1>
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Opponent Name</th>
                <th>Date</th>
                <th>Location</th>
                <th>Result</th>
                <th>Team ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($games as $game) { ?>
                <tr>
                    <td><?php echo isset($game['game_id']) ? $game['game_id'] : ''; ?></td>
                    <td><?php echo isset($game['opponent_name']) ? $game['opponent_name'] : ''; ?></td>
                    <td><?php echo isset($game['date']) ? $game['date'] : ''; ?></td>
                    <td><?php echo isset($game['location']) ? $game['location'] : ''; ?></td>
                    <td><?php echo isset($game['result']) ? $game['result'] : ''; ?></td>
                    <td><?php echo isset($game['team_id']) ? $game['team_id'] : ''; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
