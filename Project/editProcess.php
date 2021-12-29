<?php
    include "connect.php";

    $id_transaksi = $_POST['id_transaksi'];
    $status = $_POST['status'];

    $qry = "UPDATE transaksi set status = '$status' where id_transaksi = '$id_transaksi'";

     $result=mysqli_query($connect,$qry);

     if ($result) {
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
        exit;
     }else{
         ?>
            <script>
                alert("Your data is not valid, Please try again");

            </script>
            <?php
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=viewHistori.php">';
            exit;
     }

    
?>