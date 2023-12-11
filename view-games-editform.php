<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editGameModal-<?php echo $game['GameID']; ?>">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editGameModal-<?php echo $game['GameID']; ?>" tabindex="-1" aria-labelledby="editGameModalLabel-<?php echo $game['GameID']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editGameModalLabel-<?php echo $game['GameID']; ?>">Edit Game</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="opponent_name-<?php echo $game['GameID']; ?>" class="form-label">Opponent Name</label>
                        <input type="text" class="form-control" id="opponent_name-<?php echo $game['GameID']; ?>" name="opponent_name" value="<?php echo htmlspecialchars($game['Opponent']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="date-<?php echo $game['GameID']; ?>" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date-<?php echo $game['GameID']; ?>" name="date" value="<?php echo htmlspecialchars($game['Date']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="location-<?php echo $game['GameID']; ?>" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location-<?php echo $game['GameID']; ?>" name="location" value="<?php echo htmlspecialchars($game['Location']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="result-<?php echo $game['GameID']; ?>" class="form-label">Result</label>
                        <input type="text" class="form-control" id="result-<?php echo $game['GameID']; ?>" name="result" value="<?php echo htmlspecialchars($game['Result']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="team_score-<?php echo $game['GameID']; ?>" class="form-label">Team Score</label>
                        <input type="number" class="form-control" id="team_score-<?php echo $game['GameID']; ?>" name="team_score" value="<?php echo htmlspecialchars($game['TeamScore']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="opponent_score-<?php echo $game['GameID']; ?>" class="form-label">Opponent Score</label>
                        <input type="number" class="form-control" id="opponent_score-<?php echo $game['GameID']; ?>" name="opponent_score" value="<?php echo htmlspecialchars($game['OpponentScore']); ?>" required>
                    </div>
                    <input type="hidden" name="game_id" value="<?php echo $game['GameID']; ?>">
                    <input type="hidden" name="actionType" value="Edit">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
