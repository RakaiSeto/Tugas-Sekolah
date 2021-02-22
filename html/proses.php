<?php
if (isset($_POST['submit'])) {
    $user=$_POST['username'];
    $pass=$_POST['password'];
    if ($user =="rizal" && $pass == "123"){
        echo"<h2> Login Berhasil... Selamat Datang di fecabook Rizal.</h2>";
    }else{
        echo "<h2> Login gagal... masukkan username dan password dengan benar </h2>";
    }
}
?>
