<?php
function bilangan ($angka){
	$baris=array();

	for ($i=1; $i <= $angka; $i+=2) { 

		$baris=array_push($baris, $i);
	}
	$total=array_sum($baris);

	$hasil['array'] = $baris;
	$hasil['sum'] = $total;

	print_r($hasil);
}

?>