<?php

include_once "sudoku.class.php";
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
echo "<h2><center>R D TEJA says</center></h2>";
#getting values:
echo "ENTERED VALUES: <br>";
for($i=0;$i<=8;$i++){
echo "row no ".$i.":\t";
for($j=0;$j<=8;$j++){
$values[$i][$j]=intval($_POST[$k]);
$k++;
echo $values[$i][$j]."\t"."-"."\t";
}
echo "<br>";
}
#getting values end

#finding errors
echo "<br>"."SIMPLE ERRORS:<br>";
for($i=0;$i<=8;$i++){
for($j=0;$j<=8;$j++){
if($values[$i][$j]>9){
echo "===>entered a number greater than nine in row: '".$i."' and column: '".$j."'<br>";
$err++;
}#first if

#checking for loop in row
for($t=$j+1;$t<9;$t++){
if($values[$i][$j]==$values[$i][$t]&&$values[$i][$j]!=0){
echo "===>entered the number : ".$values[$i][$j]. " twice in row: '".$i."' and columns: '".$j."' and '".$t."'<br>";
$err++;
}#if in check loop
}#checking for loop in row

#checking for loop in colum
for($t1=$i+1;$t1<9;$t1++){
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
for($i=0;$i<3;$i++){
for($j=0;$j<3;$j++){
for ($t1=0;$t1<3;$t1++){
for ($t2=$j+1;$t2<3;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 1 <br>";
$err2++;
break;
}}}}}
for($i=0;$i<6;$i++){
for($j=3;$j<6;$j++){
for ($t1=0;$t1<3;$t1++){
for ($t2=$j+1;$t2<6;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 2 <br>";
$err2++;
break;
}}}}}
for($i=0;$i<3;$i++){
for($j=6;$j<9;$j++){
for ($t1=0;$t1<3;$t1++){
for ($t2=$j+1;$t2<9;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 3 <br>";
$err2++;
break;
}}}}}
for($i=3;$i<6;$i++){
for($j=0;$j<3;$j++){
for ($t1=3;$t1<6;$t1++){
for ($t2=$j+1;$t2<3;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 4 <br>";
$err2++;
break;
}}}}}
for($i=3;$i<6;$i++){
for($j=3;$j<6;$j++){
for ($t1=3;$t1<6;$t1++){
for ($t2=$j+1;$t2<6;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 5 <br>";
$err2++;
break;
}}}}}
for($i=3;$i<6;$i++){
for($j=6;$j<9;$j++){
for ($t1=3;$t1<6;$t1++){
for ($t2=$j+1;$t2<9;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 6 <br>";
$err2++;
break;
}}}}}
for($i=6;$i<9;$i++){
for($j=0;$j<3;$j++){
for ($t1=6;$t1<9;$t1++){
for ($t2=$j+1;$t2<3;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 7 <br>";
$err2++;
break;
}}}}}
for($i=6;$i<9;$i++){
for($j=3;$j<6;$j++){
for ($t1=6;$t1<9;$t1++){
for ($t2=$j+1;$t2<6;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 8 <br>";
$err2++;
break;
}}}}}
for($i=6;$i<9;$i++){
for($j=6;$j<9;$j++){
for ($t1=6;$t1<9;$t1++){
for ($t2=$j+1;$t2<9;$t2++){
if($values[$i][$j]==$values[$t1][$t2]&&$values[$i][$j]!=0){
echo "===>entered the number: ".$values[$i][$j]."twice in box 9 <br>";
$err2++;
break;
}}}}}
echo "[number of tricky errors: ".$err2."]<br>";
echo "[TOTAL ERRORS: ".($err+$err2)."]<br>";
$tot=($err+$err2);
#if for box 1 errors

#here comes main solving code
if($tot!=0) echo "<h2>wrong question</h2><br>";
if($tot==0){
echo "<h2><center>It can be solved</center><h2>";

	
	
	// The application could take longer than normal php execution
	// time. So set the execution time limit to 0(unlimited).
	set_time_limit(0);
	
	// input sudoku array in the format row == col array mapping
	$sudoku=array(
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
for($i=0;$i<9;$i++){
for($j=0;$j<9;$j++){
$sudoku[$i][$j]=$values[$i][$j];
}
}
	
	// create an object of SudokuSolver.
	$solver = new SudokuSolver();
	
	// Pass the input sudoku to the $solver object.
	$solver -> input ($sudoku);
	
	// Solve the sudoku and return the solved sudoku.
	$solved = $solver -> solve ();
	
	// printing the formated input sudoku
	print "<B>Input Sudoku:</B><br />";
	foreach ($sudoku as $row){
		foreach ($row as $col ){
			print $col . "&nbsp;&nbsp;";
		}
		print "<br />";
	}
	
	print "<hr />";
	
	// printing the formated solved sudoku.
	print "<B>Solved Sudoku:</B><br />";
	foreach ($solved as $row){
		foreach ($row as $col ){
			print $col . "&nbsp;&nbsp;";
		}
		print "<br />";
	}



}

?>
