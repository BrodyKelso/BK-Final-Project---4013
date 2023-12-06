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
