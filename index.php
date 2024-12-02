<?php
session_start();
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'DaftarMenu') {
    $page = "DaftarMenu.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'KategoriMenu') {
    $page = "KategoriMenu.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'Order') {
    $page = "Order.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'Dapur') {
    $page = "Dapur.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'User') {
    if ($_SESSION['level_RasaNusantara']==1) {
        $page = "User.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'Report') {
    if ($_SESSION['level_RasaNusantara']==1) {
        $page = "Report.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/proses_logout.php";
} else {
    include "main.php";
}
?>