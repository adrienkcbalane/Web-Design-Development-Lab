<html>
<head>
<title>My First Web Page</title>
<body align = center><h1>
<?php
//Equality and Inequality
$a = 3;
$b = 2;
$month = "December"; 

if($a===$b) echo "a is equal to b <br>";
if($month== "December") echo "it is Christmas time!";
echo "<br>";
if($a>$b) echo "a is greater than b <br>";
if($a<$b) echo "a is less than b";
echo "<br>";
if($a>=$b) echo "a is greater than or equal b";
echo "<br>";
if($a<=$b) echo "a is less than or equal b";
$c = 1;
$d = 0;
echo $c and $d;
echo "<br>";
if($c or $d)
{
	echo "One of the Operands or both operands are TRUE";
}	
echo "<br>";
echo $c xor $d;
$bank_balance = 120;
$savings=100;
if($bank_balance<100)
{
	$money = 1000;
	$bank_balance+=$money; // The same as bank_balance = bank_balance + money		
	echo "<br>";
	echo "The bank balance is: ".$bank_balance;
}
else
{
	$savings +=50;      // The same as savings = savings +50
	$bank_balance-=50; // The same as bank_balance = bank_balance-50
	echo " The saving is: ".$savings;
	echo "<br>";
	echo "The bank balance is: ".$bank_balance;
	echo "<br>";
}

$page = "Home";
switch($page)
{
	case "Home";
	{
		echo "You choose Home";
		break;
	}
	case "Login";
	{
		echo "You choose Login";
		break;
	}
	case "Links";
		{
		echo "You choose Links";
		break;
	}
	default:
	{
		echo "None of the choices is correct";
	}
}




$fuel = 10;
echo $fuel<=1? "Fill tank now": " There's enough fuel";


?></h1>
</body>

</head>

</html>