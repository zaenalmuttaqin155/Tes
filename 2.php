<?php 

$prima = [1,2, 3, 5, 7, 11, 13, 17, 19, 23, 29];



function Buy($a, $b){

	$egg = 2500;

	$beli = $b/$egg;

	$prima = [1,2, 3, 5, 7, 11, 13, 17, 19, 23, 29];

	




	if ($beli == 12 || $a == $prima) {


		$barang = $beli+2;

		echo $barang;

	}elseif ($a % 2 == 1 || $a !== $prima) {

		
		$barang = $beli+3;

		echo $barang;

		# code...
	}elseif($a % 5 == 0 || $beli % 2 ==0){
		
		$barang = $beli * 10;
	}elseif($a % 5 == 0 || $beli % 2 ==1){
		$barang = $beli *5;
	}

















	// if( $a == $prima ){
	// 	//jika tanggal prima bunus 2 buah
	// 		$barang =$beli+2;
	// 	}elseif($prima % 2 == 1){

	// 		$barang= $beli+3;
			


	// 	}





}

Buy(25,30000);








 ?>