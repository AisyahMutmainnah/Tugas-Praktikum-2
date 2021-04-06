<?php
$nama = "";
$nim = "";
$kelas = "";
$mata_kuliah = "";
$uts = "";
$uas = "";
$grade = "";


if (isset($_REQUEST["submit"])) {
  $nama = $_GET["nama"];
  $nim = $_GET["nim"];
  $uts = $_GET["uts"];

  if ($uts >= 90) {
    $grade = "A";
  } else if ($uts >= 80) {
    $grade = "B";
  } else if ($uts >= 70) {
    $grade = "C";
  } else {
    $grade = "D";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewsport" content="width=device-width,initial-scale=1.0">
  <title>Form Handling</title>
</head>

<body>
  <form method="GET" action="prktikum2.php">
    Nama : <input type="text" name="nama"><br><br>
    NIM : <input type="number" name="nim"><br><br>
    Kelas : <input type="text" name="kelas"><br><br>
    Mata Kuliah : <input type="text" name="mata_kuliah"><br><br>
    Nilai UTS : <input type="number" name="uts"><br><br>
    Nilai UAS : <input type="number" name="uas"><br><br>
    <input type="submit" name="submit">
  </form>
</body>

</html>