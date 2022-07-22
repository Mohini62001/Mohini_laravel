<?php  
$num = 123456;  
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
}  
echo "Reverse number of 123456 is: $revnum";  
?>  