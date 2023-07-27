<?php

if(!function_exists('terbilang')){
	function terbilang($n)
	{
if ($n < 0) return 'minus ' . terbilang(-$n);
else if ($n < 10) {
switch ($n) {
case 0: return 'zero';
case 1: return 'one';
case 2: return 'two';
case 3: return 'three';
case 4: return 'four';
case 5: return 'five';
case 6: return 'six';
case 7: return 'seven';
case 8: return 'eight';
case 9: return 'nine';
}
}
else if ($n < 100) {
$kepala = floor($n/10);
$sisa = $n % 10;
if ($kepala == 1) {
if ($sisa == 0) return 'ten';
else if ($sisa == 1) return 'eleven';
else if ($sisa == 2) return 'twelve';
else if ($sisa == 3) return 'thirteen';
else if ($sisa == 5) return 'fifteen';
else if ($sisa == 8) return 'eighteen';
else return terbilang($sisa) . 'teen';
}
else if ($kepala == 2) $hasil = 'twenty';
else if ($kepala == 3) $hasil = 'thirty';
else if ($kepala == 5) $hasil = 'fifty';
else if ($kepala == 8) $hasil = 'eighty';
else $hasil = terbilang($kepala) . 'ty';
}
else if ($n < 1000) {
$kepala = floor($n/100);
$sisa = $n % 100;
$hasil = terbilang($kepala) . ' hundred';
}
else if ($n < 1000000) {
$kepala = floor($n/1000);
$sisa = $n % 1000;
$hasil = terbilang($kepala) . ' thousand';
}
else if ($n < 1000000000) {
$kepala = floor($n/1000000);
$sisa = $n % 1000000;
$hasil = terbilang($kepala) . ' million';
}
else return false;
if ($sisa > 0) $hasil .= ' ' . terbilang($sisa);
return $hasil;
}
}


if(!function_exists('terbilang_english')){
	function terbilang_english($n)
	{
if ($n < 0) return 'minus ' . terbilang(-$n);
else if ($n < 10) {
switch ($n) {
case 0: return 'zero';
case 1: return 'one';
case 2: return 'two';
case 3: return 'three';
case 4: return 'four';
case 5: return 'five';
case 6: return 'six';
case 7: return 'seven';
case 8: return 'eight';
case 9: return 'nine';
}
}
else if ($n < 100) {
$kepala = floor($n/10);
$sisa = $n % 10;
if ($kepala == 1) {
if ($sisa == 0) return 'ten';
else if ($sisa == 1) return 'eleven';
else if ($sisa == 2) return 'twelve';
else if ($sisa == 3) return 'thirteen';
else if ($sisa == 5) return 'fifteen';
else if ($sisa == 8) return 'eighteen';
else return terbilang_english($sisa) . 'teen';
}
else if ($kepala == 2) $hasil = 'twenty';
else if ($kepala == 3) $hasil = 'thirty';
else if ($kepala == 5) $hasil = 'fifty';
else if ($kepala == 8) $hasil = 'eighty';
else $hasil = terbilang_english($kepala) . 'ty';
}
else if ($n < 1000) {
$kepala = floor($n/100);
$sisa = $n % 100;
$hasil = terbilang_english($kepala) . ' hundred';
}
else if ($n < 1000000) {
$kepala = floor($n/1000);
$sisa = $n % 1000;
$hasil = terbilang_english($kepala) . ' thousand';
}
else if ($n < 1000000000) {
$kepala = floor($n/1000000);
$sisa = $n % 1000000;
$hasil = terbilang_english($kepala) . ' million';
}
else if ($n < 1000000000000) {
$kepala = floor($n/1000000000);
$sisa = $n % 1000000000;
$hasil = terbilang_english($kepala) . ' billion';
}



 
else return false;
if ($sisa > 0) $hasil .= ' ' . terbilang_english($sisa);
return $hasil;
}
}



if(!function_exists('terbilang_indonesia')){
	function terbilang_indonesia($n)
	{
if ($n < 0) return 'minus ' . terbilang(-$n);
else if ($n < 10) {
switch ($n) {
case 0: return 'nol';
case 1: return 'seratus';
case 2: return 'dua';
case 3: return 'tiga';
case 4: return 'empat';
case 5: return 'lima';
case 6: return 'enam';
case 7: return 'tujuh';
case 8: return 'delapan';
case 9: return 'sembilan';
}
}
else if ($n < 100) {
$kepala = floor($n/10);
$sisa = $n % 10;
if ($kepala == 1) {
if ($sisa == 0) return 'sepuluh';
else if ($sisa == 1) return 'sebelas';
else if ($sisa == 2) return 'dua belas';
else if ($sisa == 3) return 'tiga belas';
else if ($sisa == 5) return 'lima belas';
else if ($sisa == 8) return 'delapan belas';
else return terbilang_indonesia($sisa) . 'belas';
}
else if ($kepala == 2) $hasil = 'dua puluh';
else if ($kepala == 3) $hasil = 'tiga puluh';
else if ($kepala == 5) $hasil = 'lima puluh';
else if ($kepala == 8) $hasil = 'delapan puluh';
else $hasil = terbilang_indonesia($kepala) . 'puluh';
}
else if ($n < 1000) {
$kepala = floor($n/100);
$sisa = $n % 100;
$hasil = terbilang_indonesia($kepala) . ' ratus';
}
else if ($n < 1000000) {
$kepala = floor($n/1000);
$sisa = $n % 1000;
$hasil = terbilang_indonesia($kepala) . ' ribu';
}
else if ($n < 1000000000) {
$kepala = floor($n/1000000);
$sisa = $n % 1000000;
$hasil = terbilang_indonesia($kepala) . ' juta';
}
else if ($n < 1000000000000) {
$kepala = floor($n/1000000000);
$sisa = $n % 1000000000;
$hasil = terbilang_indonesia($kepala) . ' milliar';
}



 
else return false;
if ($sisa > 0) $hasil .= ' ' . terbilang_indonesia($sisa);
return $hasil;
}
}



function conv_nilai($grade)
{

	if ($grade<=100 and $grade>=0)
		{if($grade>90)
			return "A";
		else if ($grade>80)
			return "B";
		else if ($grade>70)
			return "C";
		else if ($grade>=55)
			return "D";
		else if ($grade<55)
			return "E";}
	else
		return "-";


}

?>