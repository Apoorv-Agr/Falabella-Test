<?php 

	//echo "Hello";
	$n = 100;
	
	for($i=1; $i<=$n; $i++ ) {
		$mulOf3Rem = ($i % 3);
		$mulOf5Rem = ($i % 5);
		$mulOf3Nd5Rem = $mulOf5Rem + $mulOf3Rem;
		$remArr = array($mulOf3Rem,$mulOf5Rem,$mulOf3Nd5Rem);
		switch($remArr) {
			case ($remArr[2] == 0) :
				echo sprintf("%s\n","Linianos");
			break;
			case ($remArr[1] == 0) :
				echo sprintf("%s\n","IT");
			break;
			case ($remArr[0] == 0) :
				echo sprintf("%s\n","Linio");
			break;
			default:
                		echo sprintf("%s\n",$i);
		}
	}
?>
