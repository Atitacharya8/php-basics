<?php 
   $path="dir0/dir1/myfile.php";
   $file='text.txt';

   //Return filename
   // echo basename($path);



   //Return filename withourt extension

    // echo basename($path, '.php');


  //Check if file exists
  // echo file_exists($file);

   //get the path
   // echo realpath($file);

   //checks to see if file

   // echo file_exists('test');

//check if writeable and readable

   // echo is_writable($file);

   // echo is_readable($file);


   //get the file size
   // echo filesize($file);

   //create a directory
   // mkdir('testing');

   //remove a directory
   // rmdir('test');


   //copy file
   // echo copy('text.txt','file1.txt');

   //Rename a file
   // rename('file1.txt','hello.txt');

   //Delete file
   // unlink('text.txt');

   //write from file to string
   // echo file_get_contents($file);

   //write string to file

   // echo file_put_contents($file, 'Goodbye world');

   //append a data to file
   // $current =file_get_contents($file);
   // $current.='GoodBye world';
   // file_put_contents($file, $current);

   //Open file for reading

   // $handle =fopen($file,'r');
   // $data =fread($handle,filesize($file));
   // echo $data;
    

    //Open file for writing
   // $handle=fopen('file2.txt','w');
   // $txt='Atit acharya\n';
   // fwrite($handle,$txt);
   // $txt='Steve smith\n';
   // fclose($handle);
 ?>