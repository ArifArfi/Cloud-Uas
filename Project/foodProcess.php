<?php
    include "connect.php";
    date_default_timezone_set("Asia/Jakarta");

    $id_akun=$_POST['id_akun'];
    $tanggal=date("Y-m-d H:i:s");
    $destination=$_POST['destination'];
    $quantity=$_POST['quantity'];
    $item=$_POST['item'];
    $qry="insert into transaksi(id_akun, tanggal, destination, quantity, id_item,status) values
    ('$id_akun','$tanggal','$destination', '$quantity', '$item',0)";
    $result=mysqli_query($connect,$qry);

    if ($result) {
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=viewHistory.php">';
            exit;
    } else {
        ?>
            <script>
                alert("Your data is not valid, Please try again");

            </script>
            <?php
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=viewHistori.php">';
            exit;
    }
?>