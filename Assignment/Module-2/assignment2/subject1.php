<html>
<body>

<?php
 
$Physics=50;
$Chemistry=70;
$Biology=80;
$Mathematics=65;
$Computer=55;
$total=$Physics+$Chemistry+$Biology+$Mathematics+$Computer;
$percentage=$total*100/500;
{
	echo "Physics:".$Physics."<br>";
    echo "Chemistry:".$Chemistry."<br>";
    echo "Biology:".$Biology."<br>";
    echo "Mathematics:".$Mathematics."<br>";
    echo "Computer:".$Computer."<br>";
    echo "total no of marks:".$total."<br>";
    echo "percentage:".$percentage."<br>";
}

 
if($percentage>=70)
{
	echo "Grade:grade Distinction";
}
else if($percentage>=60)
{
	echo "Grade:fisrt class";
}
else if($percentage>=50)
{
	echo "Grade:second class";
}
else if($percentage<=35)
{
	echo "Grade:pass class";
}
else
{
	echo "fail";
}
?>
 
</body>
</html>
