<?php 
    //session_start();
    if(empty($_SESSION['username_RasaNusantara'])){
        header('location:login');
    }

    include "proses/connect.php";
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE  username = '$_SESSION[username_RasaNusantara]'");
    $hasil = mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rasa Nusantara - Aplikasi pemesanan makanan di Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="height: 3000px">
    <!-- header -->
    <?php include "header.php"; ?>
    <!-- end header -->
    <div class="container-lg">
        <div class="row">
            <!-- Sidebar -->
            <?php include "Sidebar.php"; ?>
            <!-- end sidebar -->

            <!-- content -->
            <?php include $page; ?>
            <!-- end content -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>