<?php
// $star=1;
// 	for( $a=$star;$a<10;$a++){
// 	for($i=10; $i>=$a; $i--){
// 	}
// 	for($a1=$star;$a1<=$a;$a1++){
// 		echo"*";
// 	}
// 	echo"<br>";
// 	}


	// $star=10;
	// for( $a=$star;$a>=1;$a--){
	// for($i=10; $i>=$a; $i--){
	// 	echo "&nbsp";
	// }
    // for($u=1; $u <=$a; $u ++){
	// echo "*";
    // }
	// echo"<br>";
	// }

/* 
   segitiga rata kiri
*/
// for($a=10; $a>=1; $a--){
// 	echo "<br> $a";
// 	for ($a1=10; $a1 >= $a; $a1--){
// 		echo "&nbsp $a1";
// 	}
// 	for ($a2=10; $a2 >= $a; $a2--){
// 		echo "i";
// 	}
// }

for($a=1; $a<=10; $a++){
	echo " <br>";
	for($i=10; $i>=$a; $i--){
		echo "&nbsp";
	}
	for($u=1; $u<=$a; $u++){
		echo "*";
	}

}
?>