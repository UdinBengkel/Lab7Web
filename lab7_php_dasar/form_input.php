<!DOCTYPE html>
<html>
<head>
  <title>Form Input Data</title>
</head>
<body>
  <h2>Form Input Data</h2>

  <form method="POST" action="">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Tanggal Lahir:</label><br>
    <input type="date" name="tgl_lahir" required><br><br>

    <label>Pekerjaan:</label><br>
    <select name="pekerjaan" required>
      <option value="Programmer">Programmer</option>
      <option value="Desainer">Desainer</option>
      <option value="Guru">Guru</option>
      <option value="Dokter">Dokter</option>
      <option value="Petani">Petani</option>
    </select><br><br>

    <input type="submit" value="Kirim">
  </form>

  <hr>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = $_POST['nama'];
      $tgl_lahir = $_POST['tgl_lahir'];
      $pekerjaan = $_POST['pekerjaan'];

      // Hitung umur
      $today = new DateTime();
      $lahir = new DateTime($tgl_lahir);
      $umur = $today->diff($lahir)->y;

      // Gaji berdasarkan pekerjaan
      switch ($pekerjaan) {
          case "Programmer":
              $gaji = 10000000;
              break;
          case "Desainer":
              $gaji = 8000000;
              break;
          case "Guru":
              $gaji = 6000000;
              break;
          case "Dokter":
              $gaji = 15000000;
              break;
          case "Petani":
              $gaji = 4000000;
              break;
          default:
              $gaji = 0;
              break;
      }

      // Tampilkan hasil
      echo "<h3>Hasil Input</h3>";
      echo "Nama: $nama <br>";
      echo "Tanggal Lahir: $tgl_lahir <br>";
      echo "Umur: $umur tahun<br>";
      echo "Pekerjaan: $pekerjaan <br>";
      echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
  }
  ?>
</body>
</html>
