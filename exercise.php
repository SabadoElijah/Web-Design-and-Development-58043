<html>
<head>
<title>My First Web Page</title>
<body align=center>

<form action="exercise.php" method="get">
	Input score: <input type="text" name="score">
	<input type="submit">
</form>
<p>Please make sure to click submit after inputting score<br><br></p>
<h1><?php 
$a = $_GET["score"];
echo "Score: ".$a."<br>";

echo "Result: ";
if ($a>=70)
{
	echo "PASSED";
}
elseif ($a>=60 && $a<=69)
{	
	echo "REMEDIAL";
}
else
{
	echo "FAILED";
}

?></h1>
</body>

</head>

</html>