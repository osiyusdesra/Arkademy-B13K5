<?php


function Arkademy($b){ //$b adalah maksimal angka yang diinput
    $a=1; //angka pertama
    if (!preg_match("/^[0-9]*$/",$b)){
        echo "Input Harus Angka";
    }
    else {
        foreach (range($a,$b) as $num){
            if ($num % 3 != 0 && $num % 7 !=0){
                echo $num .", ";
                continue;
            }
            if ($num % 3 == 0) echo 'Arka';
            if ($num % 7 == 0) echo 'Demy';
            echo ", ";
        }
    }
}

Arkademy(21);

?>