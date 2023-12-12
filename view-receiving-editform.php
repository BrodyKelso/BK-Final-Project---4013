<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editReceivingModal-<?php echo $row['PlayerID']; ?>">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editReceivingModal-<?php echo $row['PlayerID']; ?>" tabindex="-1" aria-labelledby="editReceivingModalLabel-<?php echo $row['PlayerID']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editReceivingModalLabel-<?php echo $row['PlayerID']; ?>">Edit Receiving Statistic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <!-- Receptions Field -->
                    <div class="mb-3">
                        <label for="receptions-<?php echo $row['PlayerID']; ?>" class="form-label">Receptions</label>
                        <input type="number" class="form-control" id="receptions-<?php echo $row['PlayerID']; ?>" name="receptions" value="<?php echo $row['Receptions']; ?>" required>
                    </div>

                    <!-- Receiving Yards Field -->
                    <div class="mb-3">
                        <label for="receivingYards-<?php echo $row['PlayerID']; ?>" class="form-label">Receiving Yards</label>
                        <input type="number" class="form-control" id="receivingYards-<?php echo $row['PlayerID']; ?>" name="receivingYards" value="<?php echo $row['ReceivingYards']; ?>" required>
                    </div>

                    <!-- Average Yards Per Reception Field -->
                    <div class="mb-3">
                        <label for="averageYardsPerReception-<?php echo $row['PlayerID']; ?>" class="form-label">Average Yards Per Reception</label>
                        <input type="number" step="0.01" class="form-control" id="averageYardsPerReception-<?php echo $row['PlayerID']; ?>" name="averageYardsPerReception" value="<?php echo $row['AverageYardsPerReception']; ?>" required>
                    </div>

                    <!-- Longest Reception Field -->
                    <div class="mb-3">
                        <label for="longestReception-<?php echo $row['PlayerID']; ?>" class="form-label">Longest Reception</label>
                        <input type="number" class="form-control" id="longestReception-<?php echo $row['PlayerID']; ?>" name="longestReception" value="<?php echo $row['LongestReception']; ?>" required>
                    </div>

                    <!-- Touchdowns Field -->
                    <div class="mb-3">
                        <label for="touchdowns-<?php echo $row['PlayerID']; ?>" class="form-label">Touchdowns</label>
                        <input type="number" class="form-control" id="touchdowns-<?php echo $row['PlayerID']; ?>" name="touchdowns" value="<?php echo $row['Touchdowns']; ?>" required>
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
