<?php

namespace app\backend;
use app\backend\vendor\autoload;
class UserController{
    public function  get_user(){
        return[
            ['nome'=> 'eux','idade' => 15],
            ['nome' => 'tu', 'idade' => 16],
            ];
    }
    public function insert_users(){}

    public function update_users(){}

    public function delet_users(){}
    
}

