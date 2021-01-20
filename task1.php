<?php
$goods = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
        'img' => 'flute.jpg',
        'description' => [
            'color' => 'white',
            'material' => 'bamboo'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Гитара',
        'price' => 18000,
        'img' => 'guitar.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'linden'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Барабан',
        'price' => 68000,
        'img' => 'drum.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'steel'
        ]
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <style>
    
    table
    {
        margin: 100px;
        width: 600px;
    }

    table, th, td 
    {
        border: 1px solid #333;
        border-collapse: collapse;
    }

    th, td 
    {
        padding: 15px;
    }
    
    
    </style>

    <table>

    <tr>
        <th>id</th>
        <th>title</th>
        <th>price</th>
        <th>img</th>    
        <th>decription</th>
    </tr>

    <?php foreach($goods as $key) : ?>
    <tr>
        <td><?= $key['id']; ?></td>
        <td><?= $key['title']; ?></td>
        <td><?= $key['price']; ?></td>
        <td><?= $key['img']; ?></td>
        <td>
            <ul>
                <li>Color: <?= $key['description']['color']; ?></li>
                <li>Material: <?= $key['description']['material']; ?></li>
            </ul>
            
        </td>
    </tr>
    <?php endforeach; ?>
    
    </table>


    
</body>
</html>