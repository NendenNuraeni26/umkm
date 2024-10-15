<?php
session_start();
include "admin/connection.php";
$username = $_POST['username'];
$psw = $_POST['password'];
$op = $_GET['op'];

if ($op == "in") {
    $sql = "SELECT * from register where username='$username' AND password='$psw'";
    $query = $koneksi->query($sql);
    if (mysqli_num_rows($query) == 1) {
        echo 'ok';
        $data = $query->fetch_array();
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        if ($data['level'] == "Admin") {
            header("location:home.php");
        } else if ($data['level'] == "Mentor") {
            header("location:home.php");
        } else if ($data['level'] == "Member") {
            header("location:home.php");
        }
    } else {
        die("password salah <a href=\"javascript:history.back()\">kembali</a>");
    }
} else if ($op == "out") {
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header('location:from_login.php');
} else {
    echo $op;
}
