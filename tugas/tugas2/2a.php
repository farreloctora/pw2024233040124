<?php
  
  $namaDepan = "Farrel";
  $namaBelakang = "Octora";

  for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
      echo $namaDepan . " " . $namaBelakang . "<br>";
    } elseif ($i % 3 == 0) {
      echo $namaDepan . "<br>";
    } elseif ($i % 5 == 0) {
      echo $namaBelakang . "<br>";
    } else {
      echo $i . "<br>";
    }
   }
?>