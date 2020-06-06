<?php
function angka($x, $y=1){
	if($y <= $x){
		angka($x, $y+1);
		echo "Angka ke :".$y."<br/>";
	}
}
angka(15);
      
?>

<?php
function faktorial($n){
	if($n==1){
		return $n;
	}else{
		return $n * faktorial($n-1);
	}
}
$nilai =10;
echo "Hasil faktorial ".$nilai."! = ".faktorial($nilai);
?>