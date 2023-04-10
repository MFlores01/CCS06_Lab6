<?php

function leapYear() {
    for ($o = 4; $o <= 2024; $o++)
    {
        if ($o % 4 == 0) 
        {
            if ($o % 100 != 0)
            {
                echo $o . "\n";
            }
        }
    }
}

echo leapYear();

?>