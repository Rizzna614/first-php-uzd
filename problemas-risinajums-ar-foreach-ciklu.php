<?php

$array = array(1, 2, 3, 4);
$brivpratigoStundas = 0;
$biedruSaraksts = [
array("vards" => "Renars", "uzvards" => "Kaupers", "loma" => "vaditajs", "stundas" => 6,),
array("vards" => "Ronalds", "uzvards" => "Kalniņš", "loma" => "dalibnieks", "stundas" => 7,),
array("vards" => "Arturs", "uzvards" => "Lamba", "loma" => "dalibnieks", "stundas" => 4,),
array("vards" => "Mārtiņš", "uzvards" => "Laksis", "loma" => "dalibnieks", "stundas" => 20,),
array("vards" => "Oskars", "uzvards" => "Sniegs", "loma" => "dalibnieks", "stundas" => 11,),
array("vards" => "Akmens", "uzvards" => "Koks", "loma" => "vaditajs", "stundas" => 15,),
array("vards" => "Pasta", "uzvards" => "Masta", "loma" => "dalibnieks", "stundas" => 30,),
];

echo "Vadītāji: ";
foreach ($biedruSaraksts as $i)
    {
         if ($i["loma"] == "vaditajs")
            {
                echo $i["vards"], " ", $i["uzvards"], ", "; //" - Vaditajs; ";
            } else
            {
                $brivpratigoStundas += $i["stundas"];
            }
        //if ($i["stundas"] >= 20 && $i["loma"] == "dalibnieks")
            //{
                //echo $i["vards"], " ", $i["uzvards"], " - Zvaigzņu brīvprātīgais; ";
            //}
        //ar visu augstak redzamo iekomenteto ciklu vareja uztaisit visu viena foreach cikla bet tad konsole sanak mudzeklis
    };

    echo "Zvaigžņu brīvprātīgie: ";
    foreach ($biedruSaraksts as $i)
        {
            if ($i["stundas"] >= 20 && $i["loma"] == "dalibnieks")
                {
                    echo $i["vards"], " ", $i["uzvards"], ", ";
                }
        }

    echo "Brivprātīgo stundu skaits: ", $brivpratigoStundas, "h, ";

    echo "High hours: ";
    foreach ($biedruSaraksts as $i)
    {
        if ($i["stundas"] >= 15)
            {
                echo $i["vards"], " ", $i["uzvards"], ", ";   // - sitais ir papildus uzdevums ko es pats pieliku, lai labak izprastu foreach ciklu
            }
    };
//foreach apstaiga visus objekta vai masiva elementus
//jaatceras ka ierakstitais masivs paliek par ierakstito aiz "as", tatad piem saja gadijuma,
// kad ieksa foreach cikla raksta $i tas reali nozime $biedruSaraksts[$i(skaitlis)]