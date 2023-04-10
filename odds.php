<?php

function oddNumbers() {
    for ($o = 1; $o <= 100; $o++)
    {
        if (($o % 2) != 0)
        {
            echo $o .= "\n";
        }
    }
}

echo oddNumbers();

?>