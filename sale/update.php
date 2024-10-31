<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $sql = "UPDATE sales SET supplier_id='$supplier_id',total='$total',WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=sale');
    } else {
        include('index.php?m=sale');
        echo '<script language="JavaScript">';
            echo 'alert("Data gagal diupdate")';
        echo '</script>';
    }
} else {
    echo "Jangan Langsung eksekusi ke file ini, klik <a href='?m=sale&s=add'>disini</a>";
}
