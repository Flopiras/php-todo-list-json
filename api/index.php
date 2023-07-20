<?php

$tasks = ['comprare il latte', 'dare da mangiare al coccodrillo', 'preparare la torta'];
header('Content-Type: application/json');
echo json_encode($tasks);
