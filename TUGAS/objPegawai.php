<?php 
require 'Pegawai.php';

$alana = new Pegawai('111','Alana van Debora','Manager','Islam','Menikah');
$alan = new Pegawai('222','Alan Alan','Asisten Manager','Islam','Belum Menikah');
$alex = new Pegawai('333','Alex Alan','Kabag','Katholik','Menikah');
$alea = new Pegawai('444','Alea van Debora','Staff','Islam','Menikah');
$siapa = new Pegawai('555','Itu Anu','Staff','Islam','Belum Menikah');

'<h3 align="center">'.Pegawai::DAFTAR.'</h3>';
$alana->mencetak();
$alan->mencetak();
$alex->mencetak();
$alea->mencetak();
$siapa->mencetak();
?>