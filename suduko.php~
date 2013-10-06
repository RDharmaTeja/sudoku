<?php
$values=array(
       array(0,0,0,0,0,0,0,0,0),
       array(0,0,0,0,0,0,0,0,0),
       array(0,0,0,0,0,0,0,0,0),
       array(0,0,0,0,0,0,0,0,0),
       array(0,0,0,0,0,0,0,0,0),
       array(0,0,0,0,0,0,0,0,0),
       array(0,0,0,0,0,0,0,0,0),
       array(0,0,0,0,0,0,0,0,0),
       array(0,0,0,0,0,0,0,0,0),
       );
$i=0;$j;
$k=1;
$err=0;
$err2=0;

#getting values:
echo "ENTERED VALUES: <br>";
for($i=1;$i<=9;$i++){
echo "row no ".$i.":\t";
for($j=1;$j<=9;$j++){
$values[$i][$j]=intval($_POST[$k]);
$k++;
echo $values[$i][$j]."\t"."-"."\t";
}
echo "<br>";
}
#getting values end

#finding errors
echo "<br>"."SIMPLE ERRORS:<br>";
for($i=1;$i<=9;$i++){
for($j=1;$j<=9;$j++){
if($values[$i][$j]>9){
echo "===>entered a number greater than nine in row: '".$i."' and column: '".$j."'<br>";
$err++;
}#first if

#checking for loop in row
for($t=$j+1;$t<=9;$t++){
if($values[$i][$j]==$values[$i][$t]&&$values[$i][$j]!=0){
echo "===>entered the number : ".$values[$i][$j]. " twice in row: '".$i."' and columns: '".$j."' and '".$t."'<br>";
$err++;
}#if in check loop
}#checking for loop in row

#checking for loop in colum
for($t1=$i+1;$t1<=9;$t1++){
if($values[$i][$j]==$values[$t1][$j]&&$values[$i][$j]!=0){
echo "===>entered the number : ".$values[$i][$j]. " twice in column: '".$j."' and rows: '".$i."' and '".$t1."'<br>";
$err++;
}#if in check loop
}#checking for loop in column

}#for secnd
}#for first

echo "[number of simple errors: ".$err."]<br>";

#for checking in a box

#for box 1
echo "TRICKY ERRORS :<br>";
for($i=1;$i<4;$i++){
for($j=1;$j<4;$j++){
for ($t1=1;$t1<4;$t1++){
for ($t2=$j+1;$t2<4;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 1 <br>";
$err2++;
break;
}}}}}
for($i=1;$i<7;$i++){
for($j=4;$j<7;$j++){
for ($t1=1;$t1<4;$t1++){
for ($t2=$j+1;$t2<7;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 2 <br>";
$err2++;
break;
}}}}}
for($i=1;$i<4;$i++){
for($j=7;$j<10;$j++){
for ($t1=1;$t1<4;$t1++){
for ($t2=$j+1;$t2<10;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 3 <br>";
$err2++;
break;
}}}}}
for($i=4;$i<7;$i++){
for($j=1;$j<4;$j++){
for ($t1=4;$t1<7;$t1++){
for ($t2=$j+1;$t2<4;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 4 <br>";
$err2++;
break;
}}}}}
for($i=4;$i<7;$i++){
for($j=4;$j<7;$j++){
for ($t1=4;$t1<7;$t1++){
for ($t2=$j+1;$t2<7;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 5 <br>";
$err2++;
break;
}}}}}
for($i=4;$i<7;$i++){
for($j=7;$j<10;$j++){
for ($t1=4;$t1<7;$t1++){
for ($t2=$j+1;$t2<10;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 6 <br>";
$err2++;
break;
}}}}}
for($i=7;$i<10;$i++){
for($j=1;$j<4;$j++){
for ($t1=7;$t1<10;$t1++){
for ($t2=$j+1;$t2<4;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 7 <br>";
$err2++;
break;
}}}}}
for($i=7;$i<10;$i++){
for($j=4;$j<7;$j++){
for ($t1=7;$t1<10;$t1++){
for ($t2=$j+1;$t2<7;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 8 <br>";
$err2++;
break;
}}}}}
for($i=7;$i<10;$i++){
for($j=7;$j<10;$j++){
for ($t1=7;$t1<10;$t1++){
for ($t2=$j+1;$t2<10;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 9 <br>";
$err2++;
break;
}}}}}
echo "[number of tricky errors: ".$err2."]<br>";
echo "[TOTAL ERRORS: ".($err+$err2)."]<br>";

#if for box 1 errors

?>
