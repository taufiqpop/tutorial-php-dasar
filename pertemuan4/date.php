<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");
echo "<br>";

// Time
// UNIX Timestamp / EPOCH time
// detik yg sudah berlalu sejak 1 januari 1970 - sekarang
echo time();
echo "<br>";
echo date("l, d M Y", time()+60*60*24*99);
echo "<br>";

// MKTime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l, d m Y", mktime(0,0,0,6,18,2001));
echo "<br>";

// strtotime
echo date("l, d m Y", strtotime ("18 jun 2001"));

// String
// strlen() (menghitung panjang sebuah string)
// strcmp() (membandingkan sebuah string)
// explode() (memecah string menjadi array)
// htmlspecialchars()


// Utility
// var_dump()
// isset() (boolean, ngecek variabel udah dibuat atau belom)
// empty() (mengecek variabel kosong atau tidak)
?>