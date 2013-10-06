<?php
$var=mysqli_connect("localhost","root","darmateja","mydb");
if(mysqli_connect_errno()){
echo "error no:".mysqli_connect_error($var);
}

$var2="CREATE TABLE persons(firstname CHAR(30),lastname CHAR(20), age INT,email CHAR(30),comment CHAR)";
if(mysqli_query($var,$var2)){
echo "successfully crated";
}
else "error occered :". mysqli_connect_error($var); 
?>
