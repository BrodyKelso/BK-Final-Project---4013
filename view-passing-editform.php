<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPassingModal-<?php echo $row['PlayerID']; ?>">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editPassingModal-<?php echo $row['PlayerID']; ?>" tabindex="-1" aria-labelledby="editPassingModalLabel-<?php echo $row['PlayerID']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPassingModalLabel-<?php echo $row['PlayerID']; ?>">Edit Passing Statistic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <!-- Completions Field -->
                    <div class="mb-3">
                        <label for="completions-<?php echo $row['PlayerID']; ?>" class="form-label">Completions</label>
                        <input type="number" class="form-control" id="completions-<?php echo $row['PlayerID']; ?>" name="completions" value="<?php echo $row['Completions']; ?>" required>
                    </div>

                    <!-- Attempts Field -->
                    <div class="mb-3">
                        <label for="attempts-<?php echo $row['PlayerID']; ?>" class="form-label">Attempts</label>
                        <input type="number" class="form-control" id="attempts-<?php echo $row['PlayerID']; ?>" name="attempts" value="<?php echo $row['Attempts']; ?>" required>
                    </div>

                    <!-- Passing Yards Field -->
                    <div class="mb-3">
                        <label for="passingYards-<?php echo $row['PlayerID']; ?>" class="form-label">Passing Yards</label>
                        <input type="number" class="form-control" id="passingYards-<?php echo $row['PlayerID']; ?>" name="passingYards" value="<?php echo $row['PassingYards']; ?>" required>
                    </div>

                    <!-- Completion Percentage Field -->
                    <div class="mb-3">
                        <label for="completionPercentage-<?php echo $row['PlayerID']; ?>" class="form-label">Completion Percentage</label>
                        <input type="number" step="0.01" class="form-control" id="completionPercentage-<?php echo $row['PlayerID']; ?>" name="completionPercentage" value="<?php echo $row['CompletionPercentage']; ?>" required>
                    </div>

                    <!-- Average Yards Per Attempt Field -->
                    <div class="mb-3">
                        <label for="averageYardsPerAttempt-<?php echo $row['PlayerID']; ?>" class="form-label">Average Yards Per Attempt</label>
                        <input type="number" step="0.01" class="form-control" id="averageYardsPerAttempt-<?php echo $row['PlayerID']; ?>" name="averageYardsPerAttempt" value="<?php echo $row['AverageYardsPerAttempt']; ?>" required>
                    </div>

                    <!-- Longest Pass Field -->
                    <div class="mb-3">
                        <label for="longestPass-<?php echo $row['PlayerID']; ?>" class="form-label">Longest Pass</label>
                        <input type="number" class="form-control" id="longestPass-<?php echo $row['PlayerID']; ?>" name="longestPass" value="<?php echo $row['LongestPass']; ?>" required>
                    </div>

                    <!-- Touchdowns Field -->
                    <div class="mb-3">
                        <label for="touchdowns-<?php echo $row['PlayerID']; ?>" class="form-label">Touchdowns</label>
                        <input type="number" class="form-control" id="touchdowns-<?php echo $row['PlayerID']; ?>" name="touchdowns" value="<?php echo $row['Touchdowns']; ?>" required>
                    </div>

                    <!-- Interceptions Field -->
                    <div class="mb-3">
                        <label for="interceptions-<?php echo $row['PlayerID']; ?>" class="form-label">Interceptions</label>
                        <input type="number" class="form-control" id="interceptions-<?php echo $row['PlayerID']; ?>" name="interceptions" value="<?php echo $row['Interceptions']; ?>" required>
                    </div>

                    <!-- Sacks Field -->
                    <div class="mb-3">
                        <label for="sacks-<?php echo $row['PlayerID']; ?>" class="form-label">Sacks</label>
                        <input type="number" class="form-control" id="sacks-<?php echo $row['PlayerID']; ?>" name="sacks" value="<?php echo $row['Sacks']; ?>" required>
                    </div>

                    <!-- Sack Yards Lost Field -->
                    <div class="mb-3">
                        <label for="sackYardsLost-<?php echo $row['PlayerID']; ?>" class="form-label">Sack Yards Lost</label>
                        <input type="number" class="form-control" id="sackYardsLost-<?php echo $row['PlayerID']; ?>" name="sackYardsLost" value="<?php echo $row['SackYardsLost']; ?>" required>
                    </div>

                    <!-- Quarterback Rating Field -->
                    <div class="mb-3">
                        <label for="quarterbackRating-<?php echo $row['PlayerID']; ?>" class="form-label">Quarterback Rating</label>
                        <input type="number" step="0.01" class="form-control" id="quarterbackRating-<?php echo $row['PlayerID']; ?>" name="quarterbackRating" value="<?php echo $row['QuarterbackRating']; ?>" required>
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
