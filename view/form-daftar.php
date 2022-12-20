<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran</title>

  <!-- CDN Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

  <style>
    header {
      color: skyblue;
    }
    fieldset {
      box-shadow: 4px -4px 8px blue, -4px 4px 8px blue, 4px 4px 8px blue, -4px -4px 8px blue;
      color: skyblue;
    }
    /* table input, textarea {
      border-radius: 15px;
    } */
  </style>
</head>
<body class="bg-dark text-light">
  <header>
    <h1 class="text-center my-3">Form Update Data</h1>
  </header>

  <form method="POST" action="../controller/proses-daftar.php" enctype="multipart/form-data" class="d-flex justify-content-center my-5">
    <fieldset class="p-4 rounded"> 
      <table cellpadding="10">
        <tr>
          <td>NIK</td>
          <td><input type="text" name="nik"></td>
        </tr>
        <tr>
          <td>Nama Lengkap</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Tempat Lahir</td>
          <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
          </td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Budha</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td><input type="text" name="telp"></td>
        </tr>
        <tr>
          <td>Foto Diri</td>
          <td><input type="file" name="foto_diri"></td>
        </tr>
        <tr>
          <td>Foto KTP</td>
          <td><input type="file" name="foto_ktp"></td>
        </tr>
      </table>
      
      <div class="mt-3 d-flex justify-content-center">
        <input name="simpan" type="submit" value="Simpan" class="bg-success text-light">
        <a href="../view/home.php"><input type="button" value="Batal" class="bg-danger text-light"></a>
      </div>
    </fieldset>
  </form>
</body>
</html>