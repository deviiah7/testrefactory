<html> 
<head> 
<title></title> 
</head> 
<body> 
<h2>Cek Tahun Kabisat </h2> 

    <form method="post" action=""> 
    Masukkan tahun pertama<input type="text" name="bil"/><br/><br/>
    Masukkan tahun kedua<input type="text" name="bil2"/><br/>
    <input type="submit" name="submit" value="cek"/> 
    </form> 

<?php
if(isset($_POST['submit'])){
$tahun = $_POST['bil'];
if ($tahun%4==0)
{
    echo "$tahun Tahun Kabisat"; 
}
else if($tahun%4!=0)
{
    echo "$tahun Bukan Tahun Kabisat"; 
}
}
if(isset($_POST['submit'])){
    $tahun = $_POST['bil2'];
    if ($tahun%4==0)
    {
        echo "$tahun Tahun Kabisat"; 
    }
    else if($tahun%4!=0)
    {
        echo "$tahun Bukan Tahun Kabisat"; 
    }
    }
?>
</body> 
</html> 