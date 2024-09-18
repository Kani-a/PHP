<?php

namespace App\Backend\src; 

require_once '../';

$method = $_SERVER['REQUEST_METHOD'];

$uri = $_SERVER['REQUEST_URI'];

switch($method){
	case 'GET':
		switch($uri){

		case '/user':
		http_response_code[200];
		echo json_encode(['status' => true, 'mensagen' => 'recebido com suceso']);
		break;

		case '/produto':
			http_response_code[200];
			echo json_encode(['status' => true, 'mensagen' => 'recebido com suceso']);
		}

	break;

	case 'POST':
        switch($uri){
            case '/users';
                $data = json_decode(file_get_contents('php://input'),true);
                // $users = new controler();
                $resposta = $users->insert;
                http_response_code[200];
                echo json_encode(['stauts' => true,'message' => 'receita com sucesso','dado' => $data]);
                break;

                case '/produtos';
                $data = json_decode(file_get_contents('php://input'),true);
                http_response_code[200];
                echo json_encode(['stauts' => true,'message' => 'receita com sucesso','dado' => $data]);
                break;

                default:
                echo json_encode(["uri invalido"]);
            }
	break; 
	case 'PUT':

	break;

	case 'DELETE':

	break;


	default:
	echo json_encode(["methodo invalidao"]);
} 