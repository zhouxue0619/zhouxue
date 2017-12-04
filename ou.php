<?php
$sum=0;
for($i=0;$i<=100;$i=$i+2){
    $sum=$sum+$i;
}
echo $sum."<br>";

$i=1;
$sum=0;
while($i<=100){
    if($i%2==0){
        $sum=$sum+$i;
    }
    $i++;
}
echo $sum."<br>";



for($j=1; $j<=9; $j++) {
    for($i=1; $i<=$j; $i++) {
    echo "{$i}x{$j}=".$i*$j." ";
}
    echo "<br />";
}


