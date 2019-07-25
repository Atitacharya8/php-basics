<?php
   #Conditionals 

   /*
      ==
      ===
      >
      <
      <=
      >=
      !=
      !==
   */

//    $num=6;
//    if ($num===5){

//     echo "5 passed";
//    }else{
//        echo 'did not pass';
//    }


#nesting if 

$num=5;
if ($num>4){
    if ($num<10){
        echo "$num passed";

    }
}


#switch case

$favcolor="red";
switch($favcolor){
    case 'red':
    echo 'Your Favourite Color is red';
    break;
    case 'blue':
    echo 'Your Favourite Color is blue';
    break;
    default:
    echo 'Your Favourite Color is white';
    
}




?>