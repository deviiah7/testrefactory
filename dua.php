<form method="get">
	Nilai <input type="text" name="inputan">
	<button type="submit" > Cek Nilai </button>
</form>
<?php

$nilai= isset($_GET["inputan"]) ? $_GET["inputan"] : 0 ; 

if ($nilai % 2 == 0){ 
    echo "$nilai Merupakan Bilangan Genap";
}else {
    echo "$nilai Merupakan Bilangan Ganjil";
}
?>

