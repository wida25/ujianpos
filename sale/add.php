<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Sale</div>
                <div class="col-4">
                    <a href="?m=sale&s=view" class="btn btn-lg btn-primary float-end"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="?m=sale&s=save" method="post">
                    <div class="mb-3">
                                <input type="text" name="nis" class="form-control" placeholder="Nomor induk Sale" required autofocus>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="supplier_id" class="form-control" placeholder="Suppelier_id" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="total" class="form-control" placeholder="total" required>
                            </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-warning" value="Reset">&nbsp;
                        <input type="submit" name="save" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
