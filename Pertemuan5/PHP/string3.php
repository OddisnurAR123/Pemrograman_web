<?php

$pesan = "Saya arek Malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali menjadi array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>