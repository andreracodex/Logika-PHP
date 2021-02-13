<?php
$isi = 100;
for($i=1;$i<=$isi;$i++){
    $a=0;
    for($j=1;$j<=$i;$j++){
        if($i % $j ==0){
            $a++;
        }

    }
    if($a ==2){
        echo $i .'<br>';
    }

}
?>