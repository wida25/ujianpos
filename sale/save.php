<?php
if (isset($_POST['save'])) {
    include_once('config.php');
    $nis = $_POST['nis'];
    $supplier_id = $_POST['supplier_id'];
    $total = $_POST['total'];

    $sql = "INSERT INTO sales SET nis='$nis',supplier_id='$supplier_id',total='$total'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=sale');
    } else {
        include('index.php?m=sale');
        echo '<script language="JavaScript">';
            echo 'alert("Data gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Jangan Langsung eksekusi ke file ini, klik <a href='?m=sale&s=add'>disini</a>";
}
