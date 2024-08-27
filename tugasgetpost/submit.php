<?php
    // File: submit.php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo "Nama: " . $name . "<br>";
    echo "Email: " . $email. "<br>";
    echo "Pesan: " . $message. "<br><br>";
   // echo "Pesan Anda sudah Terkirim";
}
?>