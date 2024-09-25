<?php

// tugas pengulangan dulu baru
$l = 0;
do{
    $j = 0;
    do{
        echo $l;
        $j++;
    }
    while($j < 10);
    echo "<br>";
    $l++;
    echo $l;
    $l++;
    echo $j;
}while($l < 10);

echo"<br>";

$g = 3;
$o = 9;

$a = $g * $o;
echo "hasil dari g dikali o adalah :" . $a ."<br>";