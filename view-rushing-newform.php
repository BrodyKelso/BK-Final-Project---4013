<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newRushingModal">
    Add Rushing Statistic
</button>

<!-- Modal -->
<div class="modal fade" id="newRushingModal" tabindex="-1" aria-labelledby="newRushingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRushingModalLabel">New Rushing Statistic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <!-- PlayerID Field -->
                    <div class="mb-3">
                        <label for="playerID" class="form-label">Player ID</label>
                        <input type="number" class="form-control" id="playerID" name="playerID" required>
                    </div>

                    <!-- Carries Field -->
                    <div class="mb-3">
                        <label for="carries" class="form-label">Carries</label>
                        <input type="number" class="form-control" id="carries" name="carries" required>
                    </div>

                    <!-- Rushing Yards Field -->
                    <div class="mb-3">
                        <label for="rushingYards" class="form-label">Rushing Yards</label>
                        <input type="number" class="form-control" id="rushingYards" name="rushingYards" required>
                    </div>

                    <!-- Average Yards Per Carry Field -->
                    <div class="mb-3">
                        <label for="averageYardsPerCarry" class="form-label">Average Yards Per Carry</label>
                        <input type="number" step="0.01" class="form-control" id="averageYardsPerCarry" name="averageYardsPerCarry" required>
                    </div>

                    <!-- Longest Rush Field -->
                    <div class="mb-3">
                        <label for="longestRush" class="form-label">Longest Rush</label>
                        <input type="number" class="form-control" id="longestRush" name="longestRush" required>
                    </div>

                    <!-- Touchdowns Field -->
                    <div class="mb-3">
                        <label for="touchdowns" class="form-label">Touchdowns</label>
                        <input type="number" class="form-control" id="touchdowns" name="touchdowns" required>
                    </div>

                    <input type="hidden" name="actionType" value="Add">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Rushing Statistic</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
