<?php

    $uangSaya = 2000;
    $hargaSiomay = 1000;
    $hargaBakso = 3000;

    if($uangSaya >= $hargaSiomay) {
        echo 'Beli Siomay';
    } else if ($uangSaya >= $hargaBakso) {
        echo 'Beli Bakso';
    } else {
        echo 'gausah beli';
    }



?>