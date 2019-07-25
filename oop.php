<?php 
   class Person{
   	 private $name;
   	 public $email;

   	 public function __construct($name,$email){
   	 	   	 	$this->name=$name;
                 $this->email=$email;
   	 	         echo __CLASS__. ' created<br>';
   	 }

   	 public function __destruct(){
 
   	 	         echo __CLASS__. ' destroyed<br>';
   	 }

   	 public function setName($name){
   	 	$this->name=$name;
   	 }

   	 public function getName(){
   	 	return $this->name.'<br>';
   	 }


   	 public function setEmail($email){
   	 	$this->email=$email;
   	 }

   	 public function getEmail(){
   	 	return $this->email.'<br>';
   	 }
   }

  $person1=new Person('atit',"a@gmail.com");
  echo $person1->getName();
   echo $person1->getEmail();





   // $person1->setName('atit acharya ');
   // echo $person1->getName();
   // $person1->setEmail('atitacharya@gmail.com');
   // echo $person1->getEmail();



  // $person1 -> name ='john doe';
  // $person1 -> email ='a@a,com';

  // echo $person1 ->name;


 ?>