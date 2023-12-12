<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newDefenseModal">
    Add Defense Statistic
</button>

<!-- Modal -->
<div class="modal fade" id="newDefenseModal" tabindex="-1" aria-labelledby="newDefenseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newDefenseModalLabel">New Defense Statistic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <!-- PlayerID Field -->
                    <div class="mb-3">
                        <label for="playerID" class="form-label">Player ID</label>
                        <input type="number" class="form-control" id="playerID" name="playerID" required>
                    </div>

                    <!-- Solo Tackles Field -->
                    <div class="mb-3">
                        <label for="soloTackles" class="form-label">Solo Tackles</label>
                        <input type="number" class="form-control" id="soloTackles" name="soloTackles" required>
                    </div>

                    <!-- Assisted Tackles Field -->
                    <div class="mb-3">
                        <label for="assistedTackles" class="form-label">Assisted Tackles</label>
                        <input type="number" class="form-control" id="assistedTackles" name="assistedTackles" required>
                    </div>

                    <!-- Total Tackles Field -->
                    <div class="mb-3">
                        <label for="totalTackles" class="form-label">Total Tackles</label>
                        <input type="number" class="form-control" id="totalTackles" name="totalTackles" required>
                    </div>

                    <!-- Sacks Field -->
                    <div class="mb-3">
                        <label for="sacks" class="form-label">Sacks</label>
                        <input type="number" step="0.01" class="form-control" id="sacks" name="sacks" required>
                    </div>

                    <!-- Sack Yards Field -->
                    <div class="mb-3">
                        <label for="sackYards" class="form-label">Sack Yards</label>
                        <input type="number" class="form-control" id="sackYards" name="sackYards" required>
                    </div>

                    <!-- Interceptions Field -->
                    <div class="mb-3">
                        <label for="interceptions" class="form-label">Interceptions</label>
                        <input type="number" class="form-control" id="interceptions" name="interceptions" required>
                    </div>

                    <!-- Interception Touchdowns Field -->
                    <div class="mb-3">
                        <label for="interceptionTouchdowns" class="form-label">Interception Touchdowns</label>
                        <input type="number" class="form-control" id="interceptionTouchdowns" name="interceptionTouchdowns" required>
                    </div>

                    <input type="hidden" name="actionType" value="Add">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Defense Statistic</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
