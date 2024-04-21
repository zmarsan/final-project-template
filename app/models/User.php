<?php

namespace app\models;
use app\core\Model;

class User

{
    use Model;

    protected $table = 'users';

    public function getAllUsers() {
        return $this->findAll();
    }

    public function updateUser($inputData){
        $query = "update users set fname = :fname, lname = :lname";
        return $this->queryWithParams($query, $inputData);
    }
}
