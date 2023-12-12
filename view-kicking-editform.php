<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editKickingModal-<?php echo $row['PlayerID']; ?>">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editKickingModal-<?php echo $row['PlayerID']; ?>" tabindex="-1" aria-labelledby="editKickingModalLabel-<?php echo $row['PlayerID']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editKickingModalLabel-<?php echo $row['PlayerID']; ?>">Edit Kicking Statistic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <!-- Extra Points Made Field -->
                    <div class="mb-3">
                        <label for="extraPointsMade-<?php echo $row['PlayerID']; ?>" class="form-label">Extra Points Made</label>
                        <input type="number" class="form-control" id="extraPointsMade-<?php echo $row['PlayerID']; ?>" name="extraPointsMade" value="<?php echo $row['ExtraPointsMade']; ?>" required>
                    </div>

                    <!-- Extra Points Attempted Field -->
                    <div class="mb-3">
                        <label for="extraPointsAttempted-<?php echo $row['PlayerID']; ?>" class="form-label">Extra Points Attempted</label>
                        <input type="number" class="form-control" id="extraPointsAttempted-<?php echo $row['PlayerID']; ?>" name="extraPointsAttempted" value="<?php echo $row['ExtraPointsAttempted']; ?>" required>
                    </div>

                    <!-- Extra Point Percentage Field -->
                    <div class="mb-3">
                        <label for="extraPointPercentage-<?php echo $row['PlayerID']; ?>" class="form-label">Extra Point Percentage</label>
                        <input type="number" step="0.01" class="form-control" id="extraPointPercentage-<?php echo $row['PlayerID']; ?>" name="extraPointPercentage" value="<?php echo $row['ExtraPointPercentage']; ?>" required>
                    </div>

                    <!-- Field Goals Made Field -->
                    <div class="mb-3">
                        <label for="fieldGoalsMade-<?php echo $row['PlayerID']; ?>" class="form-label">Field Goals Made</label>
                        <input type="number" class="form-control" id="fieldGoalsMade-<?php echo $row['PlayerID']; ?>" name="fieldGoalsMade" value="<?php echo $row['FieldGoalsMade']; ?>" required>
                    </div>

                    <!-- Field Goals Attempted Field -->
                    <div class="mb-3">
                        <label for="fieldGoalsAttempted-<?php echo $row['PlayerID']; ?>" class="form-label">Field Goals Attempted</label>
                        <input type="number" class="form-control" id="fieldGoalsAttempted-<?php echo $row['PlayerID']; ?>" name="fieldGoalsAttempted" value="<?php echo $row['FieldGoalsAttempted']; ?>" required>
                    </div>

                    <!-- Field Goal Percentage Field -->
                    <div class="mb-3">
                        <label for="fieldGoalPercentage-<?php echo $row['PlayerID']; ?>" class="form-label">Field Goal Percentage</label>
                        <input type="number" step="0.01" class="form-control" id="fieldGoalPercentage-<?php echo $row['PlayerID']; ?>" name="fieldGoalPercentage" value="<?php echo $row['FieldGoalPercentage']; ?>" required>
                    </div>

                    <!-- Points Field -->
                    <div class="mb-3">
                        <label for="points-<?php echo $row['PlayerID']; ?>" class="form-label">Points</label>
                        <input type="number" class="form-control" id="points-<?php echo $row['PlayerID']; ?>" name="points" value="<?php echo $row['Points']; ?>" required>
                    </div>

                    <input type="hidden" name="playerID" value="<?php echo $row['PlayerID']; ?>">
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
