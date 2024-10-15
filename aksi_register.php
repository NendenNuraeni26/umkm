<?php
include "admin/connection.php";
$user = $_POST['username'];
$psw = $_POST['password'];
$level = $_POST['level'];
$email = $_POST['email'];

$sql = "INSERT INTO register(username, email, password, level) VALUES ('$user', '$email', '$psw', '$level')";
$query = $koneksi->query($sql);

if ($query == true) {
    header('location: form_login.php?success=1');
    exit();
} else {
    echo "error";
}
