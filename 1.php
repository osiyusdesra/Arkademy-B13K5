<?php

function biodata($name, $age){
    return json_encode (array(
       'name'               => $name,
       'age'                => $age,
       'addres'             => "61B Kalibokor II street, Pucang Sewu, Gubeng, Surabaya",
       'hobby'              => array ("Travelling", "Watching Dramas", "Explore culture"),
       'is_married'         => false,
       'list_school'        => array (
           'name'       => "Universitas Andalas",
           'year_in'    => 2013,
           'year_out'   => 2018,
           'major'      => "Physics"
       ),
       'skills'             => array (
           'skill_name' => "English",
           'level'      => "Advanced"
       ),
       'interest_in_coding'  => true,
       ), JSON_PRETTY_PRINT);

}

echo biodata("Osi Yusdesra", 23)

?>