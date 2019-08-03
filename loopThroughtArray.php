<?php

// Let's build the array structure
$array[1]['name'] = "John";
$array[1]['phone'] = "+1 888 9567834";
$array[2]['name'] = "Doe";
$array[2]['phone'] = "+44 32 5600 673";
$array[3]['name'] = "Robert";
$array[3]['phone'] = "+1 45 5634 0843";
$array[4] = "Maria";


foreach ($array as $key1 => $value)
{
    echo "<br> Value: $key1 Value: $value<br>";
    
    // If it's an array, let's do another look inside it
    if (is_array($value))
    {
        foreach ($value as $key2)
        {
            echo "---- $key2 <br>";
        }
    }

    // if it's a simple string (non-array), let's print it
    else
    {
        echo "---- $value";
    }
}


?>