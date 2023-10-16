<?php
    $hari = "l";
    $tanggal = "d";
    $bulan = "M";
    $tahun = "Y";

    //echo date("$hari, $tanggal-$bulan-$tahun");

    //echo date("d-M-Y", time()+60*60*24*60);

    //mktime(0,0,0,0,0,0) 
    //Urutan parameter mktime(jam, menit, detik, tanggal, bulan, tahun) 
    //echo date("l", mktime(0,0,0,13,7,2003));

    //strtotime() parameternya adl tanggal itu sendiri
    echo strtotime("13 jul 2003");
?>