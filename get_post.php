<?php
// // if(isset($_GET['name'])){
//   echo $_GET['name'];
//   echo $_GET['email'];
// //   print_r($_GET);
// // }

// if(isset($_POST['name'])){
//     //   echo $_GET['name'];
//     //   echo $_GET['email'];
//       print_r($_POST);
//     }

if(isset($_REQUEST['name'])){
    //   echo $_GET['name'];
    //   echo $_GET['email'];
      print_r($_REQUEST);
    }

?>



<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>My website</title>
  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
<form action="get_post.php" method="GET">
<div>
<label>Name</label>
<input type="text" name="name">
</div>

<div>
<label>Email</label>
<input type="text" name="email">
</div>
<input type="submit" value="Submit">
</form>


<br>

<form action="get_post.php" method="POST">
<div>
<label>Name</label>
<input type="text" name="name">
</div>

<div>
<label>Email</label>
<input type="text" name="email">
</div>
<input type="submit" value="Submit">
</form>

  <script src="js/scripts.js"></script>
</body>
</html>