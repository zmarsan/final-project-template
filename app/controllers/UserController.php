<?php

namespace app\controllers;
use app\core\Controller;
use app\models\User;

class UserController extends Controller
{
    public function getUsers()
    {
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->getAllUsers();
        echo json_encode($users);
        exit();
    }

    public function saveUser() {
        $inputData = [
            'firstName' => $_POST['fname'] ? $_POST['lname'] : false,
            'lastName' => $_POST['fname'] ? $_POST['lname'] : false,
        ];
        $userData = $this->validateUser($inputData);

        $user = new User();
        $user->saveUser(
            [
                'fname' => $userData['fname'],
                'lname' => $userData['lname'],
            ]
        );
    }

    public function usersView() {
        include '/public/assets/views/main/about.php';
        include '/public/assets/views/main/login.php';
        exit();
    }

}
