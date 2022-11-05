<html>
<head>
<title>WDD Long Quiz 2</title>
</head>
<body>
<?php
echo "<h1>WDD Long Quiz 2</h1>";
echo "Submitted by: Sabado, Elijah Marielle S.<br>";
echo "<br><b>Problem 1:</b>";//PROBLEM 1
$salary_rate=600;
$salary=$salary_rate*15;
$taxable_amount=$salary*0.3;
$net_pay=$salary-$taxable_amount;

echo "<br>Salary rate (per day): ".$salary_rate;
echo "<br>Salary (15 days): ".$salary;
echo "<br>Taxable amount (30% of salary): ".$taxable_amount;
echo "<br>Net pay (salary - taxable amount): ".$net_pay;


echo "<br><br><b>Problem 2:</b>";//PROBLEM 2
$sum = 0;
for($int=1; $int<=50; $int++)
	{
		$sum +=$int;
	}
echo "<br>The sum of the integers 0 to 50 is: ".$sum;

?>
</body>
</html>