<?php 

$people[]="atit1";
$people[]="atit2";
$people[]="atit3";
$people[]="atit4";
$people[]="atit5";
$people[]="atit6";
$people[]="atit7";
$people[]="atit8";
$people[]="atit9";
$people[]="atit10";
$people[]="atit11";
$people[]="atit12";
$people[]="atit13";
$people[]="atit14";
$people[]="atit16";
$people[]="atit17";
$people[]="atit18";
$people[]="atit19";
$people[]="Atit20";

//GET Query string

$q =$_REQUEST['q'];
$suggestion ="";

//Get suggestions
if($q!==""){
	$q =strtolower($q);
	$len =strlen($q);
	foreach($people as $person){
		if(stristr($q, substr($person,0,$len))){
			if($suggestion===""){
				$suggestion=$person;

			}else{
				$suggestion .=", $person";
			}
		}
	}
}

echo $suggestion === ""? "No Suggestion":$suggestion;

 ?>