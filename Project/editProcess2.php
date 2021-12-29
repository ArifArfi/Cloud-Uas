<?php
    include "connect.php";

    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $verified = $_POST['verified'];

    $qry = "UPDATE akun set nama = '$nama', alamat = '$alamat', password = '$password', telp = '$telp' ,verified = '$verified' where email = '$email'";

     $result=mysqli_query($connect,$qry);

     if ($result) {
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=verifedAccount.php">';
        exit;
     }else{
         ?>
            <script>
                alert("Your data is not valid, Please try again");

            </script>
            <?php
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=editAdmin.php">';
            exit;
     }

    
?>