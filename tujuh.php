<form method="get">
	Nilai <input type="text" name="input">
	<button type="submit" > Proses</button>
</form>
<?php
$string = isset($_GET["input"]) ? $_GET["input"] : "HELLO WORDL!";

$hasil = strrev($string);
echo $hasil;
?>