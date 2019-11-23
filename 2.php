<?php

function username ($uname){ //Username terdiri dari 3-5 huruf kecil semua
    if (preg_match("/^[a-z]*$/", $uname) && strlen($uname) >= 3 && strlen($uname) <=5){
            echo "Username : $uname <br>";
            echo "True <br><br>"; }
        else {
            echo "Username : $uname <br>";
            echo "False <br><br>";}
        }


function password ($pass){ //password harus terdiri dari 3 angka, simbol"-" dan 4 huruf besar
    if (preg_match("/^[0-9]{3}-[0-9]{3}[A-Z]{4}$/", $pass)){
        echo "Password : $pass <br>";
        echo "True <br><br>";
    }
    else {
        echo "Password : $pass <br>";
        echo "False <br><br>";
    }
}


username ("osIyu");
username ("osi");
password ("021*444DEA");
password ("021-333BUDI");
password ("987-654Oliv");

?>