<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editDefenseModal-<?php echo $row['PlayerID']; ?>">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editDefenseModal-<?php echo $row['PlayerID']; ?>" tabindex="-1" aria-labelledby="editDefenseModalLabel-<?php echo $row['PlayerID']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDefenseModalLabel-<?php echo $row['PlayerID']; ?>">Edit Defense Statistic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <!-- Solo Tackles Field -->
                    <div class="mb-3">
                        <label for="soloTackles-<?php echo $row['PlayerID']; ?>" class="form-label">Solo Tackles</label>
                        <input type="number" class="form-control" id="soloTackles-<?php echo $row['PlayerID']; ?>" name="soloTackles" value="<?php echo $row['SoloTackles']; ?>" required>
                    </div>

                    <!-- Assisted Tackles Field -->
                    <div class="mb-3">
                        <label for="assistedTackles-<?php echo $row['PlayerID']; ?>" class="form-label">Assisted Tackles</label>
                        <input type="number" class="form-control" id="assistedTackles-<?php echo $row['PlayerID']; ?>" name="assistedTackles" value="<?php echo $row['AssistedTackles']; ?>" required>
                    </div>

                    <!-- Total Tackles Field -->
                    <div class="mb-3">
                        <label for="totalTackles-<?php echo $row['PlayerID']; ?>" class="form-label">Total Tackles</label>
                        <input type="number" class="form-control" id="totalTackles-<?php echo $row['PlayerID']; ?>" name="totalTackles" value="<?php echo $row['TotalTackles']; ?>" required>
                    </div>

                    <!-- Sacks Field -->
                    <div class="mb-3">
                        <label for="sacks-<?php echo $row['PlayerID']; ?>" class="form-label">Sacks</label>
                        <input type="number" step="0.01" class="form-control" id="sacks-<?php echo $row['PlayerID']; ?>" name="sacks" value="<?php echo $row['Sacks']; ?>" required>
                    </div>

                    <!-- Sack Yards Field -->
                    <div class="mb-3">
                        <label for="sackYards-<?php echo $row['PlayerID']; ?>" class="form-label">Sack Yards</label>
                        <input type="number" class="form-control" id="sackYards-<?php echo $row['PlayerID']; ?>" name="sackYards" value="<?php echo $row['SackYards']; ?>" required>
                    </div>

                    <!-- Interceptions Field -->
                    <div class="mb-3">
                        <label for="interceptions-<?php echo $row['PlayerID']; ?>" class="form-label">Interceptions</label>
                        <input type="number" class="form-control" id="interceptions-<?php echo $row['PlayerID']; ?>" name="interceptions" value="<?php echo $row['Interceptions']; ?>" required>
                    </div>

                    <!-- Interception Touchdowns Field -->
                    <div class="mb-3">
                        <label for="interceptionTouchdowns-<?php echo $row['PlayerID']; ?>" class="form-label">Interception Touchdowns</label>
                        <input type="number" class="form-control" id="interceptionTouchdowns-<?php echo $row['PlayerID']; ?>" name="interceptionTouchdowns" value="<?php echo $row['InterceptionTouchdowns']; ?>" required>
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
