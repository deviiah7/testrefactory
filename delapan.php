<form method="get">
	Nilai <input type="text" name="input">
	<button type="submit" > Hitung</button>
</form>
<?php
session_start();
$input = isset($_GET['input']) ? $_GET['input'] : "";
    if($input){
        if(is_numeric($input)){
            $bank = !empty($_SESSION["value"]) ? $_SESSION["value"] : 0 ;
            $new_value = $bank + $input;
            // memaksukkan data pada session untuk di gunakan pada process berikutnya
            $_SESSION["value"] = $new_value;
            echo "data berhasil disimpan";
        }else if ($input == "="){
            if(!empty($_SESSION["value"])){
                //mengambil data dari session yang diambil
                echo  "Total = " .$_SESSION["value"];
                //menghapus session yang sudah disimpan , karena inputan adalah '='
                session_destroy();
            }else{
                echo "masukkan value number terlebih dahulu";
            }
            
        }else{
            echo "value tidak valid";
        }
    }else{
        echo "inputan kosong";
    }
?>