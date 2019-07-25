<?php 

//Message Vars
$msg='';
$msgClass='';

//Check for the submit
if(filter_has_var(INPUT_POST, 'submit')){
	//Get form data
	$name=htmlspecialchars($_POST['name']);
	$email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);

    //Check Required Fields
    if(!empty($email) && !empty($name) && !empty($message)){
    //Passed
    	//Check email
    	if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
    		//Failed
    		$msg='please use a valid email';
    	    $msgClass='alert-danger';

    	}else{
    		//Passed
    		  //Recipient Email
		 $toEmail ='atitacharya8@gmail.com';
		 $subject ='Contact Request From'.$name;
		 $body='<h2>Contact Request</h2>
                 <h4>Name</h4> <p>'.$name.'</p>
                 <h4>Email</h4> <p>'.$email.'</p>
                 <h4>Message</h4> <p>'.$message.'</p>
		     ';

		     //Email Headers
		     $headers="MIME-Version: 1.0" ."\r\n";
		     $headers .= "Content-Type:text/html;charset-UTF-8"."\r\n";

3
		     //Additional headers
		     $headers .= "From:".$name."<".$email.">"."\r\n";
		     if(mail($toEmail,$subject,$body,$headers)){
		     	//Email Sent
               $msg='your email has been sent';
    	       $msgClass='alert-success';

		     }else{
		     	$msg='Your email was not sent';
    	        $msgClass='alert-danger';
		     }
    	}

    }else{
    	//Failed
    	$msg='please fill in all fields';
    	$msgClass='alert-danger';    }
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>
		</div>
	</nav>

<div class="container">

	<?php if($msg!=''):    ?>
           <div class="alert <?php echo $msgClass; ?>">
           	<?php echo $msg; ?></div>
	<?php endif; ?>
<!-- Default form login -->
<form method="POST"class="text-center border border-light p-5" action="<?php echo $_SERVER['PHP_SELF']; ?>">

   

    <!-- Email -->
    <input type="text" name="name" class="form-control mb-4"  placeholder="Name" value="<?php echo isset($_POST['name']) ? $name :""; ?>">

    <input type="text" name="email"  class="form-control mb-4" placeholder="E-mail" value="<?php echo isset($_POST['email']) ? $email :""; ?>">

     <textarea name="message" class="form-control mb-4" placeholder="Message" value="message">
     	<?php echo isset($_POST['message']) ? $message :""; ?>
     	</textarea>
    <!-- Submit button -->
    <button class="btn btn-info btn-block my-4" type="submit" name="submit">Submit</button>
    
</form>

</div>
</body>
</html>