<?php
function cari_fibonacci($urutan)
{

  $angka_sebelumnya=15;
  $angka_sekarang=4;
  
  for ($i=0; $i<$urutan-1; $i++)
  {

    $output = $angka_sekarang + $angka_sebelumnya;
  
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
  }
  return $output;
}
  
echo cari_fibonacci(2); 
echo "<br>";

 
?>