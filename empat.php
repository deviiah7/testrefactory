<?php
$input =isset($_GET['input']) ? $_GET['input'] : "";
if($input){
    if($input == strrev($input))
    {
        echo $input," adalah polindrom";
    }
    else{
        echo $input." bukan kata palindrom";
    }
}else{
    echo "inputan kata kosong";
}
?>