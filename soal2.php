<?php
$jsonobj = '{"Daniel":20,"Jacob":17,"Mary":19,"Emily":22,"Michael":21,"Sarah":18}';
$obj = json_decode($jsonobj);
echo $obj->Daniel;
echo $obj->Jacob;
echo $obj->Mary;
echo $obj->Emily;
echo $obj->Michael;
echo $obj->Sarah;
?>
