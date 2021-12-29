<?php
    include "connect.php";

    $id=$_POST['id_transaksi'];

    $qry = "DELETE FROM transaksi where id_transaksi='$id'";
    $result = mysqli_query($connect, $qry);
    
    if ($result) {
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
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