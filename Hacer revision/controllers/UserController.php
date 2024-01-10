<?php
require_once(__DIR__ . '/../models/UserModel.php');

class UserController {
    public function login($conn, $username, $password) {
        $userModel = new UserModel($conn);
        return $userModel->getUser($username, $password);
    }
}
?>
