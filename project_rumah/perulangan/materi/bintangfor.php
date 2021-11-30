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
for($a=10; $a>=0; $a--){
	echo "<br>";
	for ($a1=1; $a1 <= $a; $a1++){
		echo "&nbsp";
	}
	for ($a2=10; $a2 >= $a; $a2--){
		echo "#";
	}
}
?>