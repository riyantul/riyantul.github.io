<?php 
session_start();
include 'koneksi.php';

//menangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data pada tabel
$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' and password='$password'");

//menghitung jumlah data
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
}else{
    header("location:index.php?pesan=gagal");

}
?>

 
