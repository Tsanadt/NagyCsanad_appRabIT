<?php

require_once 'core/Controller.php';
require_once 'services/UserService.php';

class UserController extends Controller {
    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    #loading page with the needed information
    public function listPage() {
        $users = $this->userService->getAllUsers();
        $this->view('users/listPage', ['users' => $users]);
    }
}