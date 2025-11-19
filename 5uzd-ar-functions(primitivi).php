<?php

//1.uzd

function printStaticName ($vards)
{
    echo "$vards";
}

printStaticName ("Roberts");
echo "\n";
printStaticName ("Roberts");
echo "\n";

//2.uzd

function printName ($name)
{
   echo "Vārds: ", $name;
}

printName("Anna");
echo "\n";
printName("Jānis");
echo "\n";
printName("Antra");
echo "\n";

//3.uzd un 4.uzd

function printIntegers ($first, $last)
{
    for ($i = $first; $i <= $last; $i++)
        {
            echo $i, "\n";
        }
};
printIntegers (1, 10);
echo "-SEPERATE-", "\n";
printIntegers (3, 7);

//5.uzd

echo "-SEPERATE-", "\n";

function sum ($first, $last)
{
    $result = 0;
    $result = $first + $last;
    echo $result;
}

sum (3, 7);


