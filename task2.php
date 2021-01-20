<?php
 $items = [
    [
        'title' => 'Телефон',
        'price' => 100000,
        'count' => 4
    ],
    [
        'title' => 'Часы',
        'price' => 500000,
        'count' => 2
    ],
    [
        'title' => 'Кольцо',
        'price' => 80000,
        'count' => 10
    ],
    [
        'title' => 'Браслет',
        'price' => 120000,
        'count' => 7
    ],
    [
        'title' => 'Галстук',
        'price' => 8000,
        'count' => 50
    ],
];

function sortPrice($a, $b)
{
    return $a["price"] - $b["price"];
}

usort($items, "sortPrice");


echo '<pre>';
print_r($items);
echo '</pre>';