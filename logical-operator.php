<?php

    //jika umur Joni lebih dari 17 dan sudah punya sim c,
    //maka dia boleh mengendarai motor 
    
    $umurJoni = 17;
    $punyaSim = true;

    if($umurJoni >= 17 && $punyaSim) {
        echo 'Boleh mengendarai motor';
    } else {
        echo 'Harus di bonceng';
    }


?>