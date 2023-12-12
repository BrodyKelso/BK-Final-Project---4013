<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newReceivingModal">
    Add Receiving Statistic
</button>

<!-- Modal -->
<div class="modal fade" id="newReceivingModal" tabindex="-1" aria-labelledby="newReceivingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newReceivingModalLabel">New Receiving Statistic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <!-- PlayerID Field -->
                    <div class="mb-3">
                        <label for="playerID" class="form-label">Player ID</label>
                        <input type="number" class="form-control" id="playerID" name="playerID" required>
                    </div>

                    <!-- Receptions Field -->
                    <div class="mb-3">
                        <label for="receptions" class="form-label">Receptions</label>
                        <input type="number" class="form-control" id="receptions" name="receptions" required>
                    </div>

                    <!-- Receiving Yards Field -->
                    <div class="mb-3">
                        <label for="receivingYards" class="form-label">Receiving Yards</label>
                        <input type="number" class="form-control" id="receivingYards" name="receivingYards" required>
                    </div>

                    <!-- Average Yards Per Reception Field -->
                    <div class="mb-3">
                        <label for="averageYardsPerReception" class="form-label">Average Yards Per Reception</label>
                        <input type="number" step="0.01" class="form-control" id="averageYardsPerReception" name="averageYardsPerReception" required>
                    </div>

                    <!-- Longest Reception Field -->
                    <div class="mb-3">
                        <label for="longestReception" class="form-label">Longest Reception</label>
                        <input type="number" class="form-control" id="longestReception" name="longestReception" required>
                    </div>

                    <!-- Touchdowns Field -->
                    <div class="mb-3">
                        <label for="touchdowns" class="form-label">Touchdowns</label>
                        <input type="number" class="form-control" id="touchdowns" name="touchdowns" required>
                    </div>

                    <input type="hidden" name="actionType" value="Add">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Receiving Statistic</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
