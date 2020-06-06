<?php
$data_array = ["Jakarta", "Aceh", "Malang", "Medan", "Bontang", "Jogja", "Jakarta", "Bandung", "Malang", "Solo", "Palembang", "Bandung"];
$unique = array_unique($data_array);
 foreach($unique as $r){
     echo $r.'<br>';
 }
 ?>