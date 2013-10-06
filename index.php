<?php
$var=mysqli_connect("10.22.29.225","root","darmateja","mydb");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$var2="INSERT INTO personal(firstname,lastname,age,emailid,comments) VALUES('$_POST[first]','$_POST[last]','$_POST[age]','$_POST[email]','$_POST[comment]')";
if(!mysqli_query($var,$var2)){
die ("error is".mysqli_error($var));
}
else echo "successdfully created" ;

?>
