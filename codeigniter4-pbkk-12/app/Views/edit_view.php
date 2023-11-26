<div class="container p-5">
    <a href="<?= base_url('animelist');?>" class="btn btn-secondary mb-2">Back</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Anime : <?= $animelist->name;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('animelist/update');?>">
                <div class="form-group">
                    <label for="">Anime Name</label>
                    <input type="text" value="<?= $animelist->name;?>" name="name" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Studios</label>
                    <input type="text" value="<?= $animelist->studios;?>" name="studios" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Episodes</label>
                    <input type="number" value="<?= $animelist->episodes;?>" name="episodes" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">ReleaseDate</label>
                    <input type="date" value="<?= $animelist->releasedate;?>" name="releasedate" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Type</label>
                    <input type="text" value="<?= $animelist->type;?>" name="type" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Score</label>
                    <input type="text" value="<?= $animelist->score;?>" name="score" required class="form-control">
                </div>
                <input type="hidden" value="<?= $animelist->no;?>" name="no">
                <button class="btn btn-success">Edit Anime Data</button>
            </form>
            
        </div>
    </div>
</div>