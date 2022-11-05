<html>

<head>
	<title>Long Quiz</title>
	<body align = center>
</head>

<h4>Problem 1</h4>
<?php
	
	$Salary_rate = 600;
	echo "Salary rate: $Salary_rate<br>";
	
	$Salary = $Salary_rate*15;
	echo "<br>Salary: $Salary<br/>";
	
	$Taxable_amount = 0.30 * $Salary;
	echo "<br>Taxable amount: $Taxable_amount<br/>";
	
	$Net_pay = $Salary - $Taxable_amount;
	echo "<br>Net pay: $Net_pay<br/>";
	
?>

<h4><br>Problem 2</h4>
<?php
	$a = 0;
	for($i = 1;$i<=50;$i++){
		$a += $i;
	}
	echo $a;
?>

</body>
</html>