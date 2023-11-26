<div class="container pt-5">
    <a href="<?= base_url('animelist/add');?>" class="btn btn-success mb-2">Add Anime</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">AnimeList</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Studios</th>
                            <th>Episodes</th>
                            <th>ReleaseDate</th>
                            <th>Type</th>
                            <th>Score</th>
                            <th>Action</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getAnimeList as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['name'];?></td>
                                <td><?= $isi['studios'];?></td>
                                <td><?= $isi['episodes'];?></td>
                                <td><?= $isi['releasedate'];?></td>
                                <td><?= $isi['type'];?></td>
                                <td><?= $isi['score'];?></td>
                                <td>
                                    <a href="<?= base_url('animelist/edit/'.$isi['no']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('animelist/delete/'.$isi['no']);?>" 
                                    onclick="javascript:return confirm('Do you want to delete this anime from the list')"
                                    class="btn btn-danger">
                                    Delete</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>