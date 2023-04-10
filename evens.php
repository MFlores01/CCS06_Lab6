<?php

function evenNumbers() {
    for ($o = 100; $o >= 2; $o--)
    {
        if (($o % 2) == 0)
        {
            echo $o .= "\n";
            
        }
    }
}

echo evenNumbers();

?>