<?php 
setcookie('username','Frank',time()+(86400*30));

//Delete Cookie
setcookie('username','Frank',time()-3600);


if(count($_COOKIE)>0){
   echo "ther are ".count($_COOKIE). ' cookies saved.<br>';
}else{
	echo "No any  cookies saved.";
}

  if(isset($_COOKIE['username'])){
  	echo 'User '.$_COOKIE['username']. ' is set <br>';
  }else{
  	echo 'username is not set <br>';
  }

 ?>

