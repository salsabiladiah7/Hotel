<?php   
        include 'connect.php';
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $No_kamar = $_POST['No_kamar'];

        $query = "INSERT INTO kamar (Nama,Alamat,No_kamar) VALUES($Nama, $Alamat, $No_kamar)";
        $sql = mysqli_connect($connect,$query);
        $num = mysqli_affected_rows($connect);
        if($num>0){
            header("location: login.php");
        }
        else{
            echo "gagal tambah data".mysqli_connect_error();
        }
    ?>