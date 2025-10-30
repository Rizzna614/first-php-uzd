<?php
$preces = 
[
array("nosaukums" => "Samsung XP3000 Veļasmašīna", "kategorija" => "Elektronika", "cena" => 500, "noliktavas_daudzums" => 3,),
array("nosaukums" => "Iphone 14", "kategorija" => "Elektronika", "cena" => 950, "noliktavas_daudzums" => 2,),
array("nosaukums" => "Gucci Jeans", "kategorija" => "Apģērbs", "cena" => 30, "noliktavas_daudzums" => 7,),
array("nosaukums" => "Mazais Princis", "kategorija" => "Grāmatas", "cena" => 50, "noliktavas_daudzums" => 1,),
array("nosaukums" => "Nike T-Krekls", "kategorija" => "Apģērbs", "cena" => 60, "noliktavas_daudzums" => 4,),
array("nosaukums" => "Lidmašīna lido mežā", "kategorija" => "Grāmatas", "cena" => 45, "noliktavas_daudzums" => 3,),
array("nosaukums" => "Banāns", "kategorija" => "Ēdiens", "cena" => 1, "noliktavas_daudzums" => 41,),
array("nosaukums" => "Ābols", "kategorija" => "Ēdiens", "cena" => 0.5, "noliktavas_daudzums" => 67,),
];
$precuVertiba = 0;
echo "Elektronika: ";
for ($i = 0; $i < count($preces); $i++) 
{
    if ($preces[$i]["kategorija"] == "Elektronika") 
      {
        echo $preces[$i]["nosaukums"], ", ";
      }
      $precuVertiba = $precuVertiba + $preces[$i]["cena"] * $preces[$i]["noliktavas_daudzums"];
    //if ($preces[$i]["noliktavas_daudzums"] <= 5 && $preces[$i]["kategorija"] != "Grāmatas") 
    //{
       // echo "Izpārdošanas atlaide tiks piemērota: ", $preces[$i]["nosaukums"], ", ";
   // }
   // rakstot sita varetu visu viena for cikla, kas butu tehniski pareizi bet tad viss konsole ir samudzinats
};
echo "Kopējā visu preču vērtība: ", $precuVertiba, " EUR, ";
echo "Izpārdošanas atlaide tiks piemērota: ";
for ($i = 0; $i < count($preces); $i++) 
{
    if ($preces[$i]["noliktavas_daudzums"] <= 5 && $preces[$i]["kategorija"] != "Grāmatas") 
  {
    echo $preces[$i]["nosaukums"], ", ";
  }
};
