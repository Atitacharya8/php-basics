<?php
#Loops -Execute code set number of times
/*
   For
   Wdile
   Do-while
   Foreach
   */
   
   #For loop
   #@param-initializer,condition,increments

//    for($i=0;$i<10;$i++){
    //    echo 'Number :'.$i;
    //    echo '<br>';

//    }

   #While loops
   #@paramerters-condition

//    $i=0;
//    while($i<10){
//        echo $i;
//        echo '<br>';
//        $i++;

//    }

   #Do-while loop
   #params-condition

//    $i=0;
//    do{
//        echo $i;
//        echo '<br>';
//        $i++;
//    }
//    while($i<10);

#ForEach loop=>for arrays

// $people=array('atit','acharya',40);
// foreach ($people as $person){
//     echo $person;
//     echo '<br>';
// }


$people=array('atit'=>'adsfasdfadf','acharya'=>'asdfadfasdf',40=>'asdfadsfasdfa');
foreach ($people as $person=>$text){
    echo $person.':'.$text;
    echo '<br>';
}


?>