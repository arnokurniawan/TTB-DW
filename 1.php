<?php

$totalhari = 365;
$hari = 90;

$jml = 9999;

for($x=1; $x<5; $x++ ){
	$jmlmati = (21.1/100)*$jml;
	$jmlhidup = $jml-$jmlmati;

	$jml = $jmlhidup*2;
}

echo "Jumlah Kura-kura setelah 365 hari : ".$jml;


?>