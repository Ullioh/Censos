<?php
require_once("config.php");
require_once("controllers/UserController.php");

session_start();

if (!isset($_SESSION['user'])) {
    if (!isset($_GET['action'])) {
        include("views/login.php");
    } else {
        $action = $_GET['action'];
        $userController = new UserController();

        switch ($action) {
            case 'login':
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = $userController->login($conn, $username, $password);

                if ($user) {
                    $_SESSION['user'] = $user;
                    include("views/home.php");
                } else {
                    echo "Usuario o contraseña incorrectos";
                }
                break;
            default:
                include("views/login.php");
                break;
        }
    }
} else {
    if (isset($_GET['action']) && $_GET['action'] === 'logout') {
        session_unset();
        session_destroy();
        include("views/login.php");
    } else {
        include("views/home.php");
    }
}
?>
