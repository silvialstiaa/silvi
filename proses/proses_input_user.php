<?php
    include "connect.php";
    $name = (isset($_POST['name'])) ? htmlentities($_POST['name']) : "";
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
    $level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";
    $NoHp = (isset($_POST['NoHp'])) ? htmlentities($_POST['NoHp']) : "";
    $alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";

    // Inisialisasi variabel $message
    $message = "";

    if(!empty($_POST['input_user_validate'])){
        $query = mysqli_query($conn, "INSERT INTO tb_user(nama, username, level, NoHp, password, alamat)
        values ('$name', '$username', '$level', '$NoHp', '$password', '$alamat')");
        if(!$query){
            $message = '<script>alert("Data gagal dimasukkan")</script>';
        } else {
            $message = '<script>alert("Data berhasil dimasukkan"); window.location="../user"</script>';
        }
    }
    echo $message;
?>
