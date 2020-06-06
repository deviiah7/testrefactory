<form method="get">
	Nilai <input type="text" name="inputan">
	<button type="submit" > Cek Nilai </button>
</form>

<?php 
$nilai = $_GET['inputan'];
if($nilai >= 90) {
	$category =  'A';
}
elseif(($nilai >= 80) AND ($nilai <= 89))
{
	$category = 'B';
}
elseif(($nilai >= 70) AND ($nilai <= 79))
{
	$category = 'C';
}
elseif(($nilai >= 60) AND ($nilai <= 69))
{
	$category = 'D';
}
elseif(($nilai <= 59 ))
{
	$category =  'E';
}
else
{
	$nilai = "Nilai diluar kategori";
}
echo $category . " Nilai Anda masuk dalam kategori ".$nilai;
?>