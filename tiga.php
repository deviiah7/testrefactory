<?php
$angka = [7,10,36,55,9,40,22];
$min   = $angka[0];

for ($i=1; $i < count($angka); $i++) {
    if ($angka[$i] < $min) {
        $min = $angka[$i];
    }
}
echo "Nilai minimum adalah: {$min}";
?>
<br><br>    
<?php
$angka = [2,65,4,89,55,4,2,6];
$mak   = $angka[0];

for ($i=1; $i < count($angka); $i++) {
    if ($angka[$i] > $mak) {
        $mak = $angka[$i];
    }
}
echo "Nilai maksimum adalah: {$mak}";
?>
<br> <br>
<?php 
$angka = [9, 13, 10, 3, 47, 12, 20];
$total = 0;
 
for ($i=0; $i < count($angka); $i++) { 
    $total = $total + $angka[$i];
}
$rata= round($total / count($angka), 2);
echo "Total nilai adalah {$total} dan rata-ratanya adalah {$rata}";
?>