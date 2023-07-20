<?php

$database_path = __DIR__ . '/../database/tasks.json';

// prendo il file con le tasks
$json_data = file_get_contents($database_path);

// rendo il file leggibile
$tasks = json_decode($json_data, true);

// preparo una variabile per ricevere i dati in POST
$new_task_text = $_POST['task'] ?? null;

// se ricevo qualcosa 
if ($new_task_text) {

    // preparo l'oggetto da pushare
    $new_task = ['text' = $new_task_text, 'id' = get_new_id()];
}

header('Content-Type: application/json');

echo json_encode($tasks);
