<?php
//    echo date('d/');//Day
//    echo date('m/');//month
//    echo date('Y ');//Year
//    echo date('l');//Day of the week
//    echo '<br>';
//    echo date('Y/m/d');//Day
// echo date('h:');//hour
// echo date('i:');//minutes
// echo date('s ');//second
// echo date('a');//am or pm

//Set time zone
// date_default_timezone_set('asia/kathmandu');
// echo date('h:i:sa');

 
// $timestamp =mktime(10,14,54,5,11,1997);
// // echo $timestamp;
// // echo date('m/d/Y h:i:sa',$timestamp);


// $timestamp2=strtotime('7:00pm March 22 2016');
// // echo $timestamp2;
// echo date("m/d/Y h:i:sa",$timestamp2);


$timestamp3=strtotime('tomorrow');
// echo $timestamp2;
echo date("m/d/Y h:i:sa",$timestamp3);
?>