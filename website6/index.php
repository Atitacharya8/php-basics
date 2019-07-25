<!DOCTYPE html>
<html>
<head>
	<title>Search user</title>

	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">

<script>
	function showSuggestion(str){
       if(str.length==0){
       	document.getElementById('output').innerHTML='';
       }else{

       	//Ajax REquest
         var xmlhttp= new XMLHttpRequest();  
         xmlhttp.onreadystatechange=function(){
         	if(this.readyState==4 && this.status==200){
         		document.getElementById('output').innerHTML=this.responseText;

         	}
         }
         xmlhttp.open("GET","suggest.php?q="+str,true);
         xmlhttp.send();

       }

	}
</script>

</head>
<body>
	<div class="container">
      <h1>Search Users</h1>
      <form>
      	   Search User:<input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
      </form>
      <p>Suggestions:<span id="output" style="font-weight: :bold"></span></p>

	</div>
</body>
</html>