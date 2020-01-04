<?php

$totjarak = 64500;

$jarak1 = 3*60*23;

// echo "jarak ke-1: ".$jarak1."<br>";

$jarak2 = 5*60*12;

// echo "jarak ke-2: ".$jarak2."<br>";

$jarak3 = $totjarak-$jarak2-$jarak1;

// echo "jarak ke-3: ".$jarak3."<br>";

$jarakpermenit = 2*60;

$waktu1 = $jarak3/$jarakpermenit;

// echo "waktu1 :". $waktu1 .'<br>';

$waktu = $waktu1;

// echo "waktu :". $waktu.'<br>';

$jam = floor($waktu/60);
// echo $jam.'<br>';
$menit = $waktu%60;
// echo $menit.'<br>';
// $detik = $menit%60;
// echo $detik.'<br>';

echo "Jarak Tempuh yang diperlukan Ismail adalah : {$jam} jam {$menit} menit "

?>