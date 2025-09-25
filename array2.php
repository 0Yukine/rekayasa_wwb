<?php
$jsnobj = '{"Carrot":"Orange", "Broccoli":"Green", "Tomato":"Red"}';

$arr = json_decode($jsnobj, true);

// mengakses nilai array
echo $arr['Carrot'];
echo $arr['Broccoli'];
echo $arr['Tomato'];
?>