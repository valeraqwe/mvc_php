<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/users':
        require __DIR__ . '/controllers/UserController.php';
        listUsers();
        break;
    case '/add-user':
        require __DIR__ . '/controllers/UserController.php';
        addUser();
        break;
    case preg_match('/\/user\/\d+/', $request) ? $request : !$request:
        require __DIR__ . '/controllers/UserController.php';
        viewUser();
        break;
    // Add more routes
}