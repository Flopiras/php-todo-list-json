<?php

$tasks = [
    [
        'id' => 1,
        'text' => 'comprare il latte',
        'done' => false
    ],
    [
        'id' => 2,
        'text' => 'dare da mangiare al coccodrillo',
        'done' => false
    ],
    [
        'id' => 3,
        'text' => 'preparare la torta',
        'done' => false
    ]
];


header('Content-Type: application/json');

echo json_encode($tasks);
