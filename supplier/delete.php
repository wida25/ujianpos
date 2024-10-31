<?php
if (isset($_GET['id'])) {
    include_once('config.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM supplier WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=supplier');
    } else {
        include('index.php?m=supplier');
        echo '<script language="JavaScript">';
            echo 'alert("Data gagal dihapus")';
        echo '</script>';
    }
} else {
    echo "Jangan Langsung eksekusi ke file ini, klik <a href='?m=supplier&s=add'>disini</a>";
}
