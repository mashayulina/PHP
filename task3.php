<?php 

$days = 0;
$current = 0;
$x = 10;
$y = 100;


while($current < $y)
{
    $x += $x / 10;
    $current += $x/10;
    $days++;
}

echo $days . ' days';





?>