
<!-- <?php include 'server-info.php' ?> -->
<html>
<head>
<title>System info</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.6/css/mdb.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>server and file info</h1>
    <?php if ($server): ?>
<ul class="list-group">
    <?php foreach($server as $key=>$value):?>
     <li class='list-group-item'>
        <strong><?php echo $key;   ?>:</strong>
         <?php echo $value; ?>  
     </li>

    <?php endforeach; ?>

</ul>
<?php endif; ?>

<h1>client info</h1>
    <?php if ($client): ?>
<ul class="list-group">
    <?php foreach($client as $key=>$value):?>
     <li class='list-group-item'>
        <strong><?php echo $key;   ?>:</strong>
         <?php echo $value; ?>  
     </li>

    <?php endforeach; ?>

</ul>
<?php endif; ?>
    

    </div>
</body>


</html>