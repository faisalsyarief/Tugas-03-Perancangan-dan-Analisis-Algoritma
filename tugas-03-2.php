<?php
function cariSegitiga($satu, $dua, $tiga)
{
  if ($satu == $dua && $dua == $tiga) {
    return "SEGITIGA SAMA SISI";
  } elseif ($satu == $dua || $dua == $tiga || $satu == $tiga) {
    return "SEGITIGA SAMA KAKI";
  } else {
    return "SEGITIGA SEMBARANG";
  }
}

$hasil = "";
$inputanSatu = "";
$inputanDua = "";
$inputanTiga = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $inputanSatu = (int) $_POST['inputanSatu'];
  $inputanDua = (int) $_POST['inputanDua'];
  $inputanTiga = (int) $_POST['inputanTiga'];

  $hasil = cariSegitiga($inputanSatu, $inputanDua, $inputanTiga);
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Tugas 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <h2>Perancangan dan Analisis Algoritma</h2>
    <p>Ini adalah Tugas 3 - Soal 2</p>

    <form method="post">
      <div class="form-group">
        <label for="inputanSatu">Inputan 1:</label>
        <input id="inputanSatu" class="form-control" type="number" name="inputanSatu" required>
      </div>

      <div class="form-group">
        <label for="inputanDua">Inputan 2:</label>
        <input id="inputanDua" class="form-control" type="number" name="inputanDua" required>
      </div>

      <div class="form-group">
        <label for="inputanTiga">Inputan 3:</label>
        <input id="inputanTiga" class="form-control" type="number" name="inputanTiga" required>
      </div>

      <button type="submit">Tombol Cari Sisi Segitiga</button>
    </form>

  </div>

  <div class="container">
    <h4>- Hasil - </h4>
    <p>Sisi 1: <?php echo $inputanSatu; ?></p>
    <p>Sisi 2: <?php echo $inputanDua; ?></p>
    <p>Sisi 3: <?php echo $inputanTiga; ?></p>
    <h4 id="hasil">Hasil: <?php echo $hasil; ?></h4>
  </div>

</body>

</html>
