<?php
if($_POST){
    $nama_user=$_POST['nama_user'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password= $_POST['password'];

    if(empty($nama_user)){
        echo "<script>alert('namamu tidak boleh kosong');location.href='tambah_member.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama_user, alamat, gender, username, password) value ('".$nama_user."','".$alamat."','".$gender."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Member');location.href='tambah_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Member');location.href='tambah_member.php';</script>";
        }
    }
}
?>