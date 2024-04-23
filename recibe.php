<?php

$datos = [];

foreach($_POST as $key => $value) {
    $datos['POST'][$key] = $value;
}

foreach($_GET as $key => $value) {
    $datos['GET'][$key] = $value;
}

header('Content-Type: application/json');

echo json_encode($datos);

