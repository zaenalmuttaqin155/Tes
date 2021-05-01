<?php

function prima(){

	 for($angka=1;$angka<=100;$angka++)
        {
            $prima = true;
            for($i=2; $i<$angka;$i++)
                {
                    if($angka%$i == 0)
                        $prima = false;
                }
            if($prima)
                    echo "$angka ";
        }


}





function buyEgg($tanggal, $duit){



	if ($tanggal >=2){
		$jumlah_faktor_pembagi =0;

		for($pembagi=1; $pembagi<=$tanggal; $pembagi++){
			if($tanggal % $pembagi ===0){
				$jumlah_faktor_pembagi++;
			}
		}

		if ($jumlah_faktor_pembagi ===2 ){
			return $tanggal==0;
		}else{
			return $tanggal. " =bukan<br>";

		}
	}

	$prima = $tanggal % $pembagi ==== 0;



	$egg = 2500;

	$beli = $duit/$egg;

		if( $beli == $prima ){
			$barang =$beli+12
		}elseif{
			echo "aggal";
		}







} 

buyEgg(1,5000);












function cekprima($angka){


	if ($angka >=2){
		$jumlah_faktor_pembagi =0;

		for($pembagi=1; $pembagi<=$angka; $pembagi++){
			if($angka % $pembagi ===0){
				$jumlah_faktor_pembagi++;
			}
		}

		if ($jumlah_faktor_pembagi ===2 ){
			return $angka." = prima<br>";
		}else{
			return $angka. " =bukan<br>";

		}
	}else{
		return "angka hrus lebih besar atau sama dengan";
	}

}

//echo cekprima(45);














 ?>