<?php   
$z=0;
   for ($x = 1; $x <= 4; $x++) 
{
		echo "<br>";
       echo " $x ";
	  
       $z=$x;
            for ($y = 1; $y <= 2; $y++) 
{
                $z=$z+4;
				
                echo " $z ";
				
            }
        echo "\n";
    }
?>