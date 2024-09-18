<?php

$methodo = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
// $methodo == 'GET' && $uri == 'index.php'
if($uri === "?adiburai"){
    http_response_code(200);
    echo json_encode(['status'=> true, 'message' => 'chegou com suceso']);
    }

    elseif($methodo === 'POST' && $uri === '/index.php/users'){
        $input = json_decode(file_get_contents('php://input'),true);
        http_response_code(201);
        echo json_encode(
            ['message' => 'usuario criado', 'user' => $input]
        );
    }

    //esta certo?
    //como eu 