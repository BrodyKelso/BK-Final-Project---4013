<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPlayerModal-<?php echo $player['PlayerID']; ?>">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editPlayerModal-<?php echo $player['PlayerID']; ?>" tabindex="-1" aria-labelledby="editPlayerModalLabel-<?php echo $player['PlayerID']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPlayerModalLabel-<?php echo $player['PlayerID']; ?>">Edit Player</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="name-<?php echo $player['PlayerID']; ?>" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name-<?php echo $player['PlayerID']; ?>" name="name" value="<?php echo $player['Name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="position-<?php echo $player['PlayerID']; ?>" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position-<?php echo $player['PlayerID']; ?>" name="position" value="<?php echo $player['Position']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="jerseyNumber-<?php echo $player['PlayerID']; ?>" class="form-label">Jersey Number</label>
                        <input type="number" class="form-control" id="jerseyNumber-<?php echo $player['PlayerID']; ?>" name="jerseyNumber" value="<?php echo $player['JerseyNumber']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="team-<?php echo $player['PlayerID']; ?>" class="form-label">Team</label>
                        <input type="text" class="form-control" id="team-<?php echo $player['PlayerID']; ?>" name="team" value="<?php echo $player['Team']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="height-<?php echo $player['PlayerID']; ?>" class="form-label">Height</label>
                        <input type="text" class="form-control" id="height-<?php echo $player['PlayerID']; ?>" name="height" value="<?php echo $player['Height']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="weight-<?php echo $player['PlayerID']; ?>" class="form-label">Weight</label>
                        <input type="number" class="form-control" id="weight-<?php echo $player['PlayerID']; ?>" name="weight" value="<?php echo $player['Weight']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="year-<?php echo $player['PlayerID']; ?>" class="form-label">Year</label>
                        <input type="text" class="form-control" id="year-<?php echo $player['PlayerID']; ?>" name="year" value="<?php echo $player['Year']; ?>" required>
                    </div>
                    <input type="hidden" name="playerID" value="<?php echo $player['PlayerID']; ?>">
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
