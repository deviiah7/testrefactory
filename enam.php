<form method="get">
	Nilai <input type="text" name="input">
	<button type="submit" > Hitung</button>
</form>
<?php

$nilai = isset($_GET["input"]) ? $_GET["input"] : 1;
function faktorial($n=1) {
	if ($n==1) {
		return 1;
	} else {
		return $n * faktorial ($n-1);
	}
}
 
echo "$nilai! = ".faktorial($nilai);
?>