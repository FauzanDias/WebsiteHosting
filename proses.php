<?php
  include('index.html');
    $nama=$_POST['nama'];
    $nomor=$_POST['nomor'];
    $buku=$_POST['buku'];
    $tgl=$_POST['tgl'];

      $fileku=fopen("data.txt", "a");
      $data=$nama.", ".$nomor.", ".$buku.", ".$tgl."\n";
      fwrite($fileku, $data);
      fclose($fileku);
      echo "Data Penyewa Buku: ";
      echo "<pre>";
      include("data.txt");
      echo "</pre>";
?>
