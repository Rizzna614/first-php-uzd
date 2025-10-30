<?php

function intSequence ($first, $last) 
{
    for ($i = $first; $i <= $last; $i++) 
    {
           echo $i, ", ";
    }
};

echo intSequence (5, 8);
echo "------------Seperate--------------";
echo intSequence (1, 10);
echo "------------Seperate--------------";
echo intSequence (7, 16);