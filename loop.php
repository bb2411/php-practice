<?php
$a=10;
$i=0;
$sum=0;
while($i<=$a){
    $sum=$sum+$i;
    $i++;
}
echo "sum :".$sum."\n";
$i=0;
$even=0;
$odd=0;
while($i<=$a){
    if($i%2==0){
        $even=$even+$i;
    }else{
        $odd=$odd+$i;
    }
    $i++;
}
echo "even :$even \n odd :$odd"
?>