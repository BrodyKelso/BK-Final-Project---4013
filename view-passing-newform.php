<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPassingModal">
    Add Passing Statistic
</button>

<!-- Modal -->
<div class="modal fade" id="newPassingModal" tabindex="-1" aria-labelledby="newPassingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPassingModalLabel">New Passing Statistic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <!-- PlayerID Dropdown -->
                <div class="mb-3">
                    <label for="playerID" class="form-label">Player ID</label>
                    <select class="form-control" id="playerID" name="playerID" required>
                               <?php foreach ($players as $player) { ?>
                               <option value="<?php echo $player['PlayerID']; ?>">
                               <?php echo $player['PlayerID'] . ' - ' . $player['Name']; ?>
                            </option>
                          <?php } ?>
                      </select>
                    </div>


                    <!-- Completions Field -->
                    <div class="mb-3">
                        <label for="completions" class="form-label">Completions</label>
                        <input type="number" class="form-control" id="completions" name="completions" required>
                    </div>

                    <!-- Attempts Field -->
                    <div class="mb-3">
                        <label for="attempts" class="form-label">Attempts</label>
                        <input type="number" class="form-control" id="attempts" name="attempts" required>
                    </div>

                    <!-- Passing Yards Field -->
                    <div class="mb-3">
                        <label for="passingYards" class="form-label">Passing Yards</label>
                        <input type="number" class="form-control" id="passingYards" name="passingYards" required>
                    </div>

                    <!-- Completion Percentage Field -->
                    <div class="mb-3">
                        <label for="completionPercentage" class="form-label">Completion Percentage</label>
                        <input type="number" step="0.01" class="form-control" id="completionPercentage" name="completionPercentage" required>
                    </div>

                    <!-- Average Yards Per Attempt Field -->
                    <div class="mb-3">
                        <label for="averageYardsPerAttempt" class="form-label">Average Yards Per Attempt</label>
                        <input type="number" step="0.01" class="form-control" id="averageYardsPerAttempt" name="averageYardsPerAttempt" required>
                    </div>

                    <!-- Longest Pass Field -->
                    <div class="mb-3">
                        <label for="longestPass" class="form-label">Longest Pass</label>
                        <input type="number" class="form-control" id="longestPass" name="longestPass" required>
                    </div>

                    <!-- Touchdowns Field -->
                    <div class="mb-3">
                        <label for="touchdowns" class="form-label">Touchdowns</label>
                        <input type="number" class="form-control" id="touchdowns" name="touchdowns" required>
                    </div>

                    <!-- Interceptions Field -->
                    <div class="mb-3">
                        <label for="interceptions" class="form-label">Interceptions</label>
                        <input type="number" class="form-control" id="interceptions" name="interceptions" required>
                    </div>

                    <!-- Sacks Field -->
                    <div class="mb-3">
                        <label for="sacks" class="form-label">Sacks</label>
                        <input type="number" class="form-control" id="sacks" name="sacks" required>
                    </div>

                    <!-- Sack Yards Lost Field -->
                    <div class="mb-3">
                        <label for="sackYardsLost" class="form-label">Sack Yards Lost</label>
                        <input type="number" class="form-control" id="sackYardsLost" name="sackYardsLost" required>
                    </div>

                    <!-- Quarterback Rating Field -->
                    <div class="mb-3">
                        <label for="quarterbackRating" class="form-label">Quarterback Rating</label>
                        <input type="number" step="0.01" class="form-control" id="quarterbackRating" name="quarterbackRating" required>
                    </div>

                    <input type="hidden" name="actionType" value="Add">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Passing Statistic</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
