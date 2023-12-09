<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newGameModal">
    Add Game
</button>

<!-- Modal -->
<div class="modal fade" id="newGameModal" tabindex="-1" aria-labelledby="newGameModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newGameModalLabel">New Game</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="opponent_name" class="form-label">Opponent Name</label>
                        <input type="text" class="form-control" id="opponent_name" name="opponent_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="mb-3">
                        <label for="result" class="form-label">Result</label>
                        <input type="text" class="form-control" id="result" name="result" required>
                    </div>
                    <div class="mb-3">
                        <label for="team_score" class="form-label">Team Score</label>
                        <input type="number" class="form-control" id="team_score" name="team_score" required>
                    </div>
                    <div class="mb-3">
                        <label for="opponent_score" class="form-label">Opponent Score</label>
                        <input type="number" class="form-control" id="opponent_score" name="opponent_score" required>
                    </div>
                    <input type="hidden" name="actionType" value="Add">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Game</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
