<?php
session_start();
require '../function.php';

if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
            alert('silahkan login terlebih dahulu')
            window.location: '../login/index.php';
        </script>
    ";
}

if(isset($_POST["submit"])){
    if(tambahguru($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('prodak user berhasil dikirim');
            window.location = 'gtk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('prodak user gagal dikirim');
            window.location = 'gtk.php';
        </script>
    ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punya Ihsannn</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="row">
        <div class="col-3">
            <?php require '../navbar/navbar.php'; ?>
        </div>
        <div class="col-8">
                <div class="main mt-5">
                <div class="box">
                    <h3>Tambah Guru</h3><br>
            
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br>
            
                        <label for="job">Job</label>
                        <input type="text" name="job" id="job" class="form-control"><br>
            
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control"><br>

                        <label for="roles">Roles</label>
                        <select name="roles" class="form-control">
                            <option value="kepala sekolah">Kepala Sekolah</option>
                            <option value="wakil kepala sekolah">Wakil Kepala Sekolah</option>
                            <option value="guru">Guru</option>
                        </select><br>

                        <button type="submit" name="submit" class="btn btn-dark" >Kirim</button>
                    </form>
                </div>
            </div>
        </div>            
    </div>
    
</body>
</html>