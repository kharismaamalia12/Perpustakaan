<?php 
include '../koneksi.php';
include '../aset/header.php';
$query = mysqli_query($kon, "SELECT * FROM level");
?>

<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
    <div class="card-header">
    <h2>Tambah Data Anggota</h2>
    </div>
    <div class="card-body">
         <form method="post" action="proses-tambah.php">
                <div class="form-group">
                 <label for="anggota">Nama</label>
                 <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                </div>

                <div class="form-group">
                 <label for="anggota">Kelas</label>
                 <input type="text" class="form-control" name="kelas" id="kelas"  placeholder="Masukkan kelas">
                </div>  

                <div class="form-group">
                 <label for="anggota">Telepon</label>
                 <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan nomor telepon">
                </div>

                <div class="form-group">
                 <label for="anggota">Username</label>
                 <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
                </div>

                <div class="form-group">
                 <label for="anggota">Password</label>
                 <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
                 </div>
                 
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
         </form>        
    </div>
   </div>
  </div>
 </div>
</div>    

<?php

include '../aset/footer.php';

?>