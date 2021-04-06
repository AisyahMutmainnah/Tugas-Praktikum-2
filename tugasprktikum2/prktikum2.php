<?php

$nama = "";
$nim = "";
$kelas = "";
$mata_kuliah = "";
$uts = "";
$uas = "";
$grade = "";



$nama = $_GET['nama'];
$nim = $_GET['nim'];
$kelas = $_GET['kelas'];
$mata_kuliah = $_GET['mata_kuliah'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];


echo "Nama : " . $nama . '<br/>';
echo "Mata Kuliah : " . $mata_kuliah . '<br/>';
echo "Nilai UTS : " . $uts . '<br/>';
echo "Nilai UAS : " . $uas . '<br/>';
echo "Anda Mendapat Grade A";
