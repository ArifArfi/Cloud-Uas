<?php
    include "connect.php";
    $id_akun = $_POST['id_akun'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO komentar (id_akun, komentar) VALUES ($id_akun,'$comment')";
    $result=mysqli_query($connect,$query);

    if ($result) {
        // echo $comment;
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user.php">';
            exit;
    }else{
        ?>
            <script>
                alert("Warning, Database Error");

            </script>
            <?php
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=komentar.php">';
            exit;
    }


    
?>