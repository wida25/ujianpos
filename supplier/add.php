<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Supplier</div>
                <div class="col-4">
                    <a href="?m=supplier&s=view" class="btn btn-lg btn-primary float-end"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="?m=supplier&s=save" method="post">
                    <div class="mb-3">
                                <input type="text" name="nis" class="form-control" placeholder="Nomor induk Supplier" required autofocus>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="address" class="form-control" placeholder="Alamat" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" name="phone" class="form-control" placeholder="Telepom" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
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
