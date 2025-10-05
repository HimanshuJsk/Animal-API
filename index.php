<?php
header("Content-Type: application/json");

$data = [
    [
        "id" => 1,
        "image" => "images/Black Dog.png"
    ],
    [
        "id" => 2,
        "image" => "images/Butterfly.png"
    ],
    [
        "id" => 3,
        "image" => "images/Cat.png"
    ],
    [
        "id" => 4,
        "image" => "images/Ceruus Nippon.png"
    ],
    [
        "id" => 5,
        "image" => "images/Color Parrot.png"
    ],
    [
        "id" => 6,
        "image" => "images/Dog.png"
    ],
    [
        "id" => 7,
        "image" => "images/Elephant.png"
    ],
    [
        "id" => 8,
        "image" => "images/Fluffy.png"
    ],
    [
        "id" => 9,
        "image" => "images/Parrot.png"
    ],
    [
        "id" => 10,
        "image" => "images/Tiger Mouth.png"
    ],
    [
        "id" => 11,
        "image" => "images/Tiger.png"
    ],
    [
        "id" => 12,
        "image" => "images/Turtle.png"
    ]
];

echo json_encode($data, JSON_PRETTY_PRINT);
