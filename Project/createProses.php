<?php
    include "connect.php";

    $target_path = "asset/img/user/";
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $telp=$_POST['telp'];

    $query = "SELECT * FROM akun";
    $result2 = mysqli_query($connect, $query);
    if (mysqli_num_rows($result2) > 0) {
        while ($row = mysqli_fetch_assoc($result2)) {
           
           if ($row['email'] == $email) {
               ?>
                <script>
                    alert("Email Has Been Used");

                </script>
                <?php
                 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=createAccount.php">';
                 exit;
           }


        }
    }


    if(!file_exists($target_path)) {
    	mkdir($target_path, 0755, true);
    	echo "The directory was created ";
    }
    
    $target_path = $target_path . basename(
    $_FILES['foto']['name']);
    $tmp_name = $_FILES['foto']['tmp_name'];

    $qry="insert into akun(nama, alamat, email, password, id_level, url_gambar, verified,telp) 
    values('$nama','$alamat','$email','$password', 1, '$target_path', 0,$telp)";
    // $result=mysqli_query($connect,$qry);

    if (!move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
            ?>
            <script>
                alert("Your data is not valid, Please try again");

            </script>
            <?php
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=createAccount.php">';
            exit;
    }

    if (mysqli_query($connect, $qry)) {

        move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)?>

        <script>
            alert("We have received your data, Please contact the admin to verify your account");

            </script>
            <?php
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
            exit; 

    } else {
            ?>
            <script>
                alert("Data cannot be added");

            </script>
            <?php
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=createAccount.php">';
            exit;
    }

    mysqli_close($connect);
?>