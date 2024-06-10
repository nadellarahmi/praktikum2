<div id="top" class="row mb-3">
    <div class="col">
        <h3>Hapus Data Bagian</h3>
    </div>
    <div class="col">
        <a href="?page=bagian" class="btn btn-primary float-end">
            <i class="fa fa-arrow-circle-left"></i>
            Kembali
        </a>
    </div>
</div>
<div id="pesan" class="row mb-3">
    <div class="col">
        <?php
        $id = $_GET['id'];

        $sql ="DELETE FROM bagian WHERE id = $id";
        ?>
        <div class="alert alert-danger" role="alert">
            <i class="fa-exclamation-circle"></i>
            <?php echo $sql ?>
            </div>
        </div>
        <meta http-equiv="refresh" content="2;url=?page=bagian">
    </div>
</div>