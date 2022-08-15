<?php

 if(isset($_POST['simpan'])) {
  require_once("../system/config/koneksi.php");
  $jenis_sampah = $_POST['jenis_sampah'];
  $satuan = $_POST['satuan'];
  $harga = $_POST['harga'];
  $namaFile = $_FILES['gambar']['name'];
  $tmpName = $_FILES['gambar']['tmpName'];
  $gambar = $_FILES['gambar'];
  $deskripsi = $_POST['deskripsi'];
  $folder = '../asset/internal/img/uploads/';
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];

  //cek gambar yang di upload

  if ($error === 4) {
   echo"
   <script>
   alert('pilih gambar terlebih dahulu');
   </script>
   ";
   return false;
  }

  //cek upload gambar atau bukan
  
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
   # code...
   echo "
   <script>
   alert('upload gambar');
   </script>
   ";
  }

  //cek ukuran gambar

  if ($ukuranFile > 2000000) {
   echo "
   <script>
   alert('ukuran maksimal gambar 2MB');
   </script>
   ";
  }

  //generate nama gambar
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file( $tmpName, $folder.$namaFileBaru);
  return $namaFileBaru;

  $query = "INSERT INTO sampah VALUES 
  ('','$jenis_sampah','$satuan','$harga','$namaFileBaru','$deskripsi')";
  
  $hasil = mysqli_query($conn,$query);
  
  if ($$hasil){
    echo "
        <script>
          alert('Berhasil Menambah Data!');
        </script>
        ";

        echo "<meta http-equiv='refresh'
              content='0; url=http://localhost:8080/bsk09/page/admin.php?page=data-sampah'>";

  }else{
    echo "
        <script>
          alert('Gagal Menambah Data!');
        </script>
        ";

        echo "<meta http-equiv='refresh'
              content='0; url=http://localhost:8080/bsk09/page/admin.php?page=data-sampah'>";
  }
 }

 ?>

<html>

<head>
   <title>Homepage</title>
   <style>
      label {
         font-family: Montserrat;
         font-size: 18px;
         display: block;
         color: #262626;
      }

      input[type=text],
      input[type=password] {
         border-radius: 5px;
         width: 40%;
         height: 35px;
         background: #eee;
         padding: 0 10px;
         box-shadow: 1px 2px 2px 1px #ccc;
         color: #262626;
      }

      select {
         border-radius: 5px;
         width: 42%;
         height: 39px;
         background: #eee;
         padding: 0 10px;
         box-shadow: 1px 2px 2px 1px #ccc;
         color: #262626;
      }

      input[type=submit] {
         height: 35px;
         width: 200px;
         background: #8cd91a;
         border-radius: 20px;
         color: #fff;
         margin-top: 20px;
         cursor: pointer;
      }

      input,
      select {
         font-family: Montserrat;
         font-size: 16px;
      }

      .form-group {
         padding: 5px 0;
      }
   </style>

</head>

<body>
   <h2 style="font-size: 30px; color: #262626;">Tambah Data Sampah Baru</h2>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
         <label class="text-left">Jenis Sampah</label>
         <input type="text" placeholder="Masukan jenis sampah" name="jenis_sampah" autocomplete="off" />
      </div>

      <div class="form-group">
         <label class="">Satuan</label>
         <select name="satuan">
            <option value="p">---Pilih Satuan---</option>
            <option value="KG">Kilogram</option>
            <option value="PC">Pieces</option>
            <option value="LT">Liter</option>
         </select>
      </div>

      <div class="form-group">
         <label class="">Harga (Rp)</label>
         <input type="text" placeholder="Masukan harga (Rp)" name="harga" />
      </div>

      <div class="form-group">
         <label class="">Gambar</label>
         <input type="file" name="gambar" id="gambar" />
      </div>

      <div class="form-group">
         <label class="">Deskripsi</label>
         <input type="text" placeholder="Masukan deskripsi sampah" name="deskripsi" />
      </div>

      <input type="submit" name="simpan" value="Simpan"></input>
   </form>



</body>

</html>