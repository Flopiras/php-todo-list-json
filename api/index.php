<?php

$database_path = __DIR__ . '/../database/tasks.json';

// prendo il file con le tasks
$json_data = file_get_contents($database_path);

// rendo il file leggibile
$tasks = json_decode($json_data);

header('Content-Type: application/json');

echo json_encode($tasks);
