<?php

$database_path = __DIR__ . '/../database/tasks.json';

// prendo il file con le tasks
$json_data = file_get_contents($database_path);

// rendo il file leggibile
$tasks = json_decode($json_data, true);

// preparo una variabile per ricevere i dati in POST
$new_task_text = $_POST['text'] ?? NULL;
// var_dump($_POST, $_GET);

// se ricevo qualcosa 
if ($new_task_text) {

    // funzione per assegnare un nuovo id
    $new_id = count($tasks) + 1;

    // preparo l'oggetto da pushare
    $new_task = ['text' => $new_task_text, 'id' => $new_id];

    // aggiungo il nuovo oggetto all'array di tasks
    $tasks[] = $new_task;

    $json_tasks = json_encode($tasks);
    file_put_contents($database_path, $json_tasks);
}

header('Content-Type: application/json');

echo json_encode($tasks);
