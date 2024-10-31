<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit sale</div>
                <div class="col-4">
                    <a href="?m=sale&s=view" class="btn btn-lg btn-primary float-end"> Kembali</a>
                </div>
            </div>
            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql ="SELECT * FROM sales WHERE id='$id'";
            $query = mysqli_query($con, $sql);
            $r = mysqli_fetch_array($query);
            ?>
                    <div class="card-body">
                        <form action="?m=sale&s=update" method="post">
                        <div class="mb-3">
                                <input type="text" name="nis" value="<?=$r['nis']?>" class="form-control" placeholder="Nomor Induk Sale" required autofocus>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="supplier_id" value="<?=$r['supplier_id']?>" class="form-control" placeholder="Pemasokan" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="total" value="<?=$r['total']?>" class="form-control" placeholder="Total" required>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="id" value="<?=$r['id']?>">
                                <input type="reset" class="btn btn-warning">&nbsp;
                                <input type="submit" name="update" value="Update" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>