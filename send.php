<?php

$connect=mysqli_connect("localhost","root","darmateja","STUDENT");
if(mysqli_connect_errno())
{
echo "error no:".mysqli_connect_error();
}
$enter="INSERT INTO details (name,institute,year,department,interests)
 	VALUES ('peter','jaffa','1','tom','jim morriarty')";
if(!mysql_query($connect)){
echo "error no:".mysqli_error($connect);
}
echo "teja have";

?>
