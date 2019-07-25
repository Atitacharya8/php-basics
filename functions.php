<?php
#Functuin-Block of  code that can be repeatedly called

/*
  Camel Case-myFunction()
  Lower Case-my_function()
  Pascal Case-MyFunction()
*/

//Creating Simple function
function simpleFunction(){
  echo 'Hello World';
}
//Calling a funcion
// simpleFunction();

//Function with parameter
// function sayHello($name){
// echo "Hello $name<br>";

// }
// sayHello('Atit');

// //Return values
// function addNumbers($num1,$num2){
//     return $num1 + $num2;

// }
// echo addNumbers(2,3);

//By Reference

$myNum=10;

function addFive($num){
    $num+=5;
}

function addTen($num){
    $num+=10;
}

addFive($myNum);
echo "Value:$myNum<br>";

addTen($myNum);
echo "Value: $myNum<br>"


?>

