<?php
 $nama = "darlius";
 $kelas = "XI RPL 1";
 $nilaiuts = 70;
 $nilaitugas = 75;
 $nilaiuas = 80;


 $nilaiakhir = ($nilaiuts * 0.3) + ($nilaitugas * 0.3) + ($nilaiuas * 0.4);
 


  if ($nilaiakhir >= 90) {
    $grade = "Grade A";
  } elseif ($nilaiakhir >= 80) {
    $grade = "Grade B";
  } elseif ($nilaiakhir >= 75) {
    $grade = "Grade C";
  } elseif ($nilaiakhir >= 60) {
    $grade = "Grade D";
  } else {
    $grade = "Grade E";
  }

  if ($nilaiakhir >= 90) {
    $STATUS = "LULUS";
  } elseif ($nilaiakhir >= 80) {
    $STATUS = "LULUS";
  } elseif ($nilaiakhir >= 75) {
    $STATUS = "LULUS";
  } elseif ($nilaiakhir >= 60) {
    $STATUS = "TIDAK LULUS";
  } else {
    $STATUS = "TIDAK LULUS";
  }

  echo "Nama: $nama<br>";
  echo "Kelas: $kelas<br>";
  echo "__________________________<br>";
  echo "Nilai UTS: $nilaiuts<br>";
  echo "Nilai Tugas: $nilaitugas<br>";
  echo "__________________________<br>";
  echo "Nilai UAS: $nilaiuas<br>";
  echo "Nilai Akhir: $nilaiakhir<br>";
  echo "Grade: $grade   <br>";
  echo "Status: $STATUS<br>";
?>