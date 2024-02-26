<?php

$kilo = 81;
$boy = 171;

echo "<h1>Kilo:".$kilo."</h1>";
echo "</br>";
echo "<h1>Boy:".$boy."</h1>";
echo "</br>";

$vki = vkiHesapla($kilo, $boy); //fonksiyonu cagir

echo "<h1>VKI Sonucunuz:".round($vki,2)."</h1>";
echo "</br>";

$sonuc = vkiDegerlendir($vki); //fonksiyonu cagir

echo "<h1>VKI Değerlendirmesi:".$sonuc."</h1>";
echo "</br>";

$ideal = 0; //25*m2 - 4 = kg
echo "<h1>Olmanız Gereken İdeal Kilo:".$ideal."</h1>";
echo "</br>";

function vkiHesapla($k, $b)
{
    $b2 = ($b/100);//cm yi metreye çevir

    return ($k/($b2*$b2)); //vki = (kg/m2)
}

function vkiDegerlendir($vki)
{
    if($vki<18.5)
        return "Zayıf";
    else if($vki<25)
        return "Normal";
    else if($vki<30)
        return "Kilolu";
    else if($vki<35)
        return "1.Derece Obez";
    else if($vki<40)
        return "2.Derece Obez";   
    else
        return "3.Derece Obez";  
}

?>