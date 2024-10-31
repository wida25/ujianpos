<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    $sql = "UPDATE suppliers SET name='$name',address='$address', phone='$phone',email='$email', WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=supplier');
    } else {
        include('index.php?m=supplier');
        echo '<script language="JavaScript">';
            echo 'alert("Data gagal diupdate")';
        echo '</script>';
    }
} else {
    echo "Jangan Langsung eksekusi ke file ini, klik <a href='?m=supplier&s=add'>disini</a>";
}
