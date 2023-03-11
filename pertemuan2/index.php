<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print

// for tahap development :
// print_r (cetak array)
// var_dump (informasi variabel)

echo "Taufiq Pop";
echo 999;
echo true;
print "Taufiq Pop";
print_r("Taufiq Pop");
var_dump("Taufiq Pop");

// Penulisan sintaks PHP
// 1. PHP dalam HTML
// 2. HTML dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Taufiq Pop";
echo "Halo, nama saya $nama";

// Operator
// Aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;

// Penggabung string / concatenation / concat
// .
$nama_depan = "Taufiq";
$nama_belakang = "Pop";
echo $nama_depan . " " . $nama_belakang; 

// Assignment
// =, +=, -=, *=, /=, %=, .=
$nama .= " ";
$nama .= "Keren";
echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 == "1");


// Identitas
// ===, !==
var_dump(1 === "1");

// Logika
// &&, ||, !
$a = 30;
var_dump($a < 20 && $a % 2 == 0);

?>