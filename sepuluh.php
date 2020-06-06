<?php
// dummy data json;
$person = '
[
    { "id": 1, "name": "Udin", "age": 12 },
    { "id": 2, "name": "Reane", "age": 51 },
    { "id": 3, "name": "Budi", "age": 34 },
    { "id": 4, "name": "Agus", "age": 16 },
    { "id": 5, "name": "Sari", "age": 19 },
    { "id": 6, "name": "Ririn", "age": 20 },
    { "id": 7, "name": "Dessy", "age": 23 }
  ]
';
// melakukan perulangan dan decode json
foreach(json_decode($person) as $row) {
    //melakukan filter data age < 21
    if($row->age <= 21) {
        echo "id ".$row->id.'<br>';
        echo "name ".$row->name.'<br>';
        echo "age ".$row->age.'<br>';
    };
    echo '<p>';
}
?>