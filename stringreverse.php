<?php

function balik_kata($string)
{

$result = "";
$panjang = strlen($string);
for($i = 1; $i <= $panjang; $i++)
{

$result .= substr($string, $panjang-$i, 1);

}

return $result;

}

echo balik_kata('Hello');
?>