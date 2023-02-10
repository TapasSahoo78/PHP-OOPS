<?php

$AllData = [
    [
        'id' => '1',
        'name' => 'Tapas',
        'image' => 'img-1'
    ],
    [
        'id' => '1',
        'name' => 'Tapas',
        'image' => 'img-1'
    ],
    [
        'id' => '1',
        'name' => 'Tapas',
        'image' => 'img-1'
    ]
];

$content_data = array();
$index = 0;
foreach ($AllData as $key => $my_data) {
    $content_data[$index]['id'] = $my_data['id'];
    $content_data[$index]['name'] = $my_data['name'];
    $content_data[$index]['image'] = $my_data['image'];
    $index++;
}

foreach ($content_data as $key => $value) {
    echo "<pre>";
    print_r($value['id']);
    print_r($value['name']);
    print_r($value['image']);
}
