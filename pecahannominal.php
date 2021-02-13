<?php
    $isi =112319283;
    $dataa = $isi % 100000;
    $a = ($isi - $dataa) / 100000;

    $datab = $dataa % 50000;
    $b = ($dataa - $datab) / 50000;

    $datac = $datab % 20000;
    $c = ($datab - $datac) / 20000;

    $datad = $datac % 5000;
    $d = ($datac - $datad) / 5000;

    $datae = $datad % 100;
    $e = ($datad- $datae) / 100;

    $dataf = $datae % 50;
    $f = ($datae - $dataf) / 50;

    echo "Jumlah Rp.100.000 : ".$a."<br>";
    echo "Jumlah Rp.50.000 : ".$b."<br>";
    echo "Jumlah Rp.20.000 : ".$c."<br>";
    echo "Jumlah Rp.5.000 : ".$d."<br>";
    echo "Jumlah Rp.100 : ".$e."<br>";
    echo "Jumlah Rp.50 : ".$f."<br>";

    ?>