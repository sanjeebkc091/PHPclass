<?php
for($x = 0;$x <= 10; $x++){
	echo rand(1,100); 
	echo "<br>";
}
echo " <br> <br> <br> "; 
 
$numbers =array(1,2,3,5); 
for($i = 0 ; $i < count($numbers); $i++ ){
	echo $numbers[$i]."<br> "; 
}

echo "<br> <br> ";

$string= array("sanjeeb ", "kc", " day") ; 
for($a=0 ; $a < count($string); $a++){
	echo $string[$a];

}

echo " <br> <br> <br> ";

for($y=0 ; $y<=100; $y++){
	if($y%2==0){
		echo $y."<br>";
	}
}
echo "<br> <br> ";

function checkIfEven($t){
		return $t%2==0 ; }
for($n=1;$n<100; $n++)
{
	if(checkIfEven($n)){
		echo $n. " -> ". "even"."<br>";
	}else{
		echo $n. "->"."odd"."<br>" ; 
	}
}
echo "<br> <br> ";
echo " =====================================   for checkig of even and odd of square ==============================<br><br>" ;

function square($zz){
	return $zz*$zz;
}
for($u=0;$u<=100;$u++){
	$squ = square($u);
	if(checkIfEven($squ))
	{
		echo $squ." is "." even ". "<br>";
	}
	else{
		echo $squ." is "." odd "."<br>"; 	
	}
}
?>	
<?php
echo " =====================================   FIBONACCI SQUENCE upto 20 ==============================<br><br>" ;
$a=1;
$b=1;
echo $a ."<br>";

echo $b. "<br> " ; 
for($i=0;$i<20;$i++)
{
	$c= $a+$b;
	echo $c ."<br>"; 
	$a=$b;
	$b=$c; 
}

?>
<?php
echo " ===================================== MULTIPLES OF 5 ==============================<br><br>" ;
$a=5;
for($i=1;$i<=10;$i++)
{
	
	$a=$a*$i; 
	echo $a."<br>"; 
}