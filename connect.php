<?php

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobile=$_POST["mob"];

$user='root';
$pass='';
$db='testdb';


$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql="INSERT INTO login(fname,lname,mobile)
       VALUES('$fname','$lname','$mobile')";

       if ($db->query($sql)==TRUE){

        echo "data inserted";
       }
       else{

        echo "error";
       }


echo "great work";



 ?>
