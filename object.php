<?php

$auto = array(
    "marka" => "Toyota",
    "modelis" => "Camry",
    "gads" => 2010,
);

echo $auto["marka"];

echo ", ";

if ($auto["gads"] <= 2015) 
{
    echo "Auto ir vecāks par 10 gadiem";
} else 
{
    echo "Auto nav vecāks par 10 gadiem";
};

//var_dump ($auto);    





