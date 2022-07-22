<?php
    // hollow square pattern
    $size = 5;
    for($i = 0; $i < $size; $i++) {
        // print column
        for($j = 0; $j < $size; $j++) {
            // print only star in first and last row
            if($i === 0 || $i === $size - 1) {
                echo "*";
            }
            else {
                // print star only in first and last position row
                if($j === 0 || $j === $size - 1) {
                    echo "*";
                }
                else {
                    // use &nbsp; for space
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
?>