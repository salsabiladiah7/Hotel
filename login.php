<?php
    include 'connect.php';

    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $no = $_POST['No_kamar'];

    $query = "SELECT*FROM kamar WHERE Nama='$nama' No_kamar='$no'";
    $sql = mysqli_connect($connect,$query);
    $cek = mysqli_num_rows($connect);
        if($cek>0){
            session_start();
            $_SESSION['Nama']=$nama;
            $_SESSION['No_kamar']=$no;
            $_SESSION['status']='login';
            header("location: tampilan.php");
        }
        else{
            echo "gagal tambah data".mysqli_connect_error();
        }
?>