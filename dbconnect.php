<?php
function OpenCon()
 {

 $connect = new PDO('mysql:host=127.0.0.1;
 dbname=testing',
  'root',
   '1234');

 return $connect;
 }

function CloseCon($connect)
 {
 $connect -> close();
 }

?>
