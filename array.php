<?php

#Arrau -variable that holds multiple value
   /*
     -Indexed
     -Associative
     -Multi-dimensional
   */
   
   //Indexed

   $people=array("atit","acharya","hero",4);
//    echo $people[1];
//    print_r($people);
//    var_dump($people);

//Associative arrays
$people1=array('atit'=>25,'jose'=>32,'william'=>37);
// echo $people1['atit'];
$ids=[22=>'brad',44=>'jose'];
// echo $ids[22];
$people1['acharya']=50;
// print_r($people1);
// var_dump($people1);

//Multi-Dimensional 

$cars = array(
     array('honda',20,30),
      array('t',31,40),
      array('hero',41,50)
);

echo $cars[0][1];



?>
