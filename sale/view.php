<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Sale</div>
                <div class="col-4">
                    <a href="?m=sale&s=add" class="btn btn-lg btn-primary float-end"> Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nis</th>
                            <th>Supplier_id</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include_once('config.php');
                        $sql = "SELECT * FROM sales";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result)) {
                            $no=1;
                            while ($r = mysqli_fetch_assoc($result)) {
                            echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$r['nis'].'</td>
                                <td>'.$r['supplier_id'].'</td>
                                <td>'.$r['total'].'</td>

                                <td>
                                    <a href="?m=sale&s=edit&id='.$r['ids'].'" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="?m=sale&s=delete&id='.$r['ids'].'" class="btn btn-danger btn-sm" onclick="return confirm (\'Yakin sale akan dihapus?, Menghapus sale akan menghilangkan semua data sale pada sale tersebut\')">Hapus</a>
                                </td>
                            </tr>';
                            $no++;
                        }
                        } else {
                            echo '<tr>
                            <td colspan="8" align="center">Data Kosong</td>
                            </tr>';
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>