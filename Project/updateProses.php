<?php
    include "connect.php";

    $target_path = "asset/img/user/";
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $telp=$_POST['telp'];
    $password=$_POST['password'];
    $destination = $_POST['destination'];

    $target_path = $target_path . basename(
    $_FILES['foto']['name']);
    $tmp_name = $_FILES['foto']['tmp_name'];

    if ($target_path == "asset/img/user/") {
        $target_path = $destination;
    }

    $qry = "UPDATE akun set nama = '$nama', alamat = '$alamat', password = '$password', telp = '$telp' ,url_gambar = '$target_path' where email = '$email'";

    if ($target_path == $destination) {
       
    }else{
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_path);
    }

    if (mysqli_query($connect, $qry)) {
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user.php">';
            exit;
    }

    
?>