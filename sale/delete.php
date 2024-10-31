<?php
if (isset($_GET['id'])) {
    include_once('config.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM sales WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=sale');
    } else {
        include('index.php?m=sale');
        echo '<script language="JavaScript">';
            echo 'alert("Data gagal dihapus")';
        echo '</script>';
    }
} else {
    echo "Jangan Langsung eksekusi ke file ini, klik <a href='?m=sale&s=add'>disini</a>";
}
