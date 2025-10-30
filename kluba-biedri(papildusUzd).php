<?php

$biedruSaraksts = [
array("vārds" => "Romāns", "uzvārds" => "Bērziņš", "loma" => "member", "stundas" => 6,),
array("vārds" => "Ronalds", "uzvārds" => "Kļava", "loma" => "member", "stundas" => 7,),
array("vārds" => "Armands", "uzvārds" => "Rāzna", "loma" => "leader", "stundas" => 30,),
array("vārds" => "Hugo", "uzvārds" => "Leons", "loma" => "member", "stundas" => 21,),
array("vārds" => "Gustavs", "uzvārds" => "Feldmanis", "loma" => "member", "stundas" => 12,),
array("vārds" => "Ieva", "uzvārds" => "Pelts", "loma" => "leader", "stundas" => 3,),
array("vārds" => "Jolanta", "uzvārds" => "Ruksis", "loma" => "member", "stundas" => 25,),
];

$brivpratigoStunduSkaits = 0;
$zvaigznuBrivpratigais = [];

//echo count($biedruSaraksts);

for ($i = 0; $i < count($biedruSaraksts); $i++) 
{
    //echo "sus";
    if ($biedruSaraksts[$i]["loma"] == "leader") 
    {
        echo "Līderis: ", $biedruSaraksts[$i]["vārds"], " ", $biedruSaraksts[$i]["uzvārds"], ", ";
    };

    $brivpratigoStunduSkaits = $brivpratigoStunduSkaits + $biedruSaraksts[$i]["stundas"];

    if ($biedruSaraksts[$i]["stundas"] >= 20 && $biedruSaraksts[$i]["loma"] != "leader") 
    {
        echo "Zvaigzņu brivprātīgais: ", $biedruSaraksts[$i]["vārds"], " ", $biedruSaraksts[$i]["uzvārds"], ", ";
    }
};

echo "Kopējais brivprātigo stundu skaits: ", $brivpratigoStunduSkaits, "h, ";

