<?php 
$nilai = 59;
if($nilai >= 90) {echo 'A';}
elseif(($nilai >= 80) AND ($nilai < 89))
{
	echo 'B';
}
elseif(($nilai >= 70) AND ($nilai < 79))
{
	echo 'C';
}
elseif(($nilai >= 60) AND ($nilai < 69))
{
	echo 'D';
}
elseif(($nilai <= 59 ))
{
	echo 'E';
}
else
{
	$nilai = "Nilai diluar kategori";
}
echo "Nilai Anda masuk dalam kategori ".$nilai;
?>