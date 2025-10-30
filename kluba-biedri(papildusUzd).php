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
echo "Līderi: ";
for ($i = 0; $i < count($biedruSaraksts); $i++) 
{
    //echo "sus";
    if ($biedruSaraksts[$i]["loma"] == "leader") 
    {
        echo $biedruSaraksts[$i]["vārds"], " ", $biedruSaraksts[$i]["uzvārds"], ", ";
    };
    $brivpratigoStunduSkaits = $brivpratigoStunduSkaits + $biedruSaraksts[$i]["stundas"];
    //if ($biedruSaraksts[$i]["stundas"] >= 20 && $biedruSaraksts[$i]["loma"] != "leader") 
    //{
        //echo "Zvaigzņu brivprātīgais: ", $biedruSaraksts[$i]["vārds"], " ", $biedruSaraksts[$i]["uzvārds"], ", ";
    //}
    //rakstot sita varetu visu viena for cikla, kas butu tehniski pareizi bet tad viss konsole ir samudzinats
};
echo "Kopējais brivprātigo stundu skaits: ", $brivpratigoStunduSkaits, "h, ";
echo "Zvaigžņu brīvprātīgie: ";
for ($i = 0; $i < count($biedruSaraksts); $i++)
{
   if ($biedruSaraksts[$i]["stundas"] >= 20 && $biedruSaraksts[$i]["loma"] != "leader") 
    {
        echo $biedruSaraksts[$i]["vārds"], " ", $biedruSaraksts[$i]["uzvārds"], ", ";
    }
};
