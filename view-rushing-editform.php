<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editRushingModal-<?php echo $row['PlayerID']; ?>">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editRushingModal-<?php echo $row['PlayerID']; ?>" tabindex="-1" aria-labelledby="editRushingModalLabel-<?php echo $row['PlayerID']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editRushingModalLabel-<?php echo $row['PlayerID']; ?>">Edit Rushing Statistic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <!-- Carries Field -->
                    <div class="mb-3">
                        <label for="carries-<?php echo $row['PlayerID']; ?>" class="form-label">Carries</label>
                        <input type="number" class="form-control" id="carries-<?php echo $row['PlayerID']; ?>" name="carries" value="<?php echo $row['Carries']; ?>" required>
                    </div>

                    <!-- Rushing Yards Field -->
                    <div class="mb-3">
                        <label for="rushingYards-<?php echo $row['PlayerID']; ?>" class="form-label">Rushing Yards</label>
                        <input type="number" class="form-control" id="rushingYards-<?php echo $row['PlayerID']; ?>" name="rushingYards" value="<?php echo $row['RushingYards']; ?>" required>
                    </div>

                    <!-- Average Yards Per Carry Field -->
                    <div class="mb-3">
                        <label for="averageYardsPerCarry-<?php echo $row['PlayerID']; ?>" class="form-label">Average Yards Per Carry</label>
                        <input type="number" step="0.01" class="form-control" id="averageYardsPerCarry-<?php echo $row['PlayerID']; ?>" name="averageYardsPerCarry" value="<?php echo $row['AverageYardsPerCarry']; ?>" required>
                    </div>

                    <!-- Longest Rush Field -->
                    <div class="mb-3">
                        <label for="longestRush-<?php echo $row['PlayerID']; ?>" class="form-label">Longest Rush</label>
                        <input type="number" class="form-control" id="longestRush-<?php echo $row['PlayerID']; ?>" name="longestRush" value="<?php echo $row['LongestRush']; ?>" required>
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
