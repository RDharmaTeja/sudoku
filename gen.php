<?php

$connect=mysqli_connect("localhost","root","darmateja","STUDENT");
if(mysqli_connect_errno())
{
echo "error no:".mysqli_connect_error();
}

$sql="INSERT INTO gen (col1, col2)
VALUES
(1,2)";

if(!mysql_query($sql)){

echo "error no:".mysqli_error($connect);
}
echo "teja have";

?>

