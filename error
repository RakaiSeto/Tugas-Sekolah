<?php
/*  nama file : create.php
    author    : Rakai Seto
    tgl       : 16 Maret 2021
    fungsi    : menyimpan data
    disimpan  : c:\xampp\htdocs\mbc\crud
    dijalankan: localhost/mbc\crud\create.php
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <!-- Load file css Bootstrap offline -->
    <link rel="stylesheet" href="asset/bootstrap4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
            //include file koneksi
            include "koneksi.php";
            //mencegah inputan karakter yang tidak sesuai
            function input($data)
                {   $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            //cek apakah ada kiriman form
            if ($_SERVER["REQUEST_METHOD"] == "POST")
               {$username=input($_POST["username"]);
                $nama=input($_POST["nama"]);
                $alamat=input($_POST["alamat"]);
                $email=input($_POST["email"]);
                $no_hp=input($_POST["no_hp"]);
                //query inpput menginput data ke tabel anggota
                $sql="insert into anggota (username,nama,alamat,email,no_hp) values
                ('$username','$nama','$alamat','$email','$no_hp')";
                //mengeksekusi
                $hasil=mysqli_query($kon,$sql);

                //kondisi apakah berhasil atau tidak
                if ($hasil) 
                    { header("location:index.php"); }
                else 
                    {echo "<div class='alert alert-danger>Data Gagal disimpan.</div>";

                    }
        ?>
        <h2>Input Data</h2>
        <form action=" <?php echo $_SERVER["PHP_SELF"]; ?> " method="POST">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
            </div>
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" class="form-control" rows="5" placeholder="Masukkan Alamat" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
            </div>
            <div class="form-group">
                <label>No HP:</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No HP" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
</body>
</html>
