<div class="container p-5">
    <a href="<?= base_url('animelist');?>" class="btn btn-secondary mb-2">Back</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Adding Anime</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('animelist/adds');?>">
                <div class="form-group">
                    <label for="">Anime Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Studios</label>
                    <input type="text" name="studios" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Episodes</label>
                    <input type="number" name="episodes" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">ReleaseDate</label>
                    <input type="date" name="releasedate" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Type</label>
                    <input type="text" name="type" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Score</label>
                    <input type="text" name="score" class="form-control" required>
                </div>
                <button class="btn btn-success">Add</button>
            </form>
            
        </div>
    </div>
</div>