<!-- <?php for ($i=0; $i < 5 ; $i++) { 

	for ($a=0; $a <5 ; $a++) { 


	echo " * ";
		# code...
	}
	echo "<br/>";
	# code...
} ?>

 -->
<?php 


function kotak($n){


		for ($i=0; $i < $n ; $i++) { 
			
			for ($a=0; $a <$n ; $a++) { 

			if($a %2 ==0){
				echo "#";
			}else{
				echo "0";
			}

				# code...
			}
			echo "<br/>";
			# code...
		} 	



}


kotak(6);














 ?>