<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newKickingModal">
    Add Kicking Statistic
</button>

<!-- Modal -->
<div class="modal fade" id="newKickingModal" tabindex="-1" aria-labelledby="newKickingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newKickingModalLabel">New Kicking Statistic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <!-- PlayerID Field -->
                    <div class="mb-3">
                        <label for="playerID" class="form-label">Player ID</label>
                        <input type="number" class="form-control" id="playerID" name="playerID" required>
                    </div>

                    <!-- Extra Points Made Field -->
                    <div class="mb-3">
                        <label for="extraPointsMade" class="form-label">Extra Points Made</label>
                        <input type="number" class="form-control" id="extraPointsMade" name="extraPointsMade" required>
                    </div>

                    <!-- Extra Points Attempted Field -->
                    <div class="mb-3">
                        <label for="extraPointsAttempted" class="form-label">Extra Points Attempted</label>
                        <input type="number" class="form-control" id="extraPointsAttempted" name="extraPointsAttempted" required>
                    </div>

                    <!-- Extra Point Percentage Field -->
                    <div class="mb-3">
                        <label for="extraPointPercentage" class="form-label">Extra Point Percentage</label>
                        <input type="number" step="0.01" class="form-control" id="extraPointPercentage" name="extraPointPercentage" required>
                    </div>

                    <!-- Field Goals Made Field -->
                    <div class="mb-3">
                        <label for="fieldGoalsMade" class="form-label">Field Goals Made</label>
                        <input type="number" class="form-control" id="fieldGoalsMade" name="fieldGoalsMade" required>
                    </div>

                    <!-- Field Goals Attempted Field -->
                    <div class="mb-3">
                        <label for="fieldGoalsAttempted" class="form-label">Field Goals Attempted</label>
                        <input type="number" class="form-control" id="fieldGoalsAttempted" name="fieldGoalsAttempted" required>
                    </div>

                    <!-- Field Goal Percentage Field -->
                    <div class="mb-3">
                        <label for="fieldGoalPercentage" class="form-label">Field Goal Percentage</label>
                        <input type="number" step="0.01" class="form-control" id="fieldGoalPercentage" name="fieldGoalPercentage" required>
                    </div>

                    <!-- Points Field -->
                    <div class="mb-3">
                        <label for="points" class="form-label">Points</label>
                        <input type="number" class="form-control" id="points" name="points" required>
                    </div>

                    <input type="hidden" name="actionType" value="Add">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Kicking Statistic</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
