<?php
declare(strict_types=1);

use models\User;

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Department.php';

function listUsers(): void {
    $users = User::getAll();
    $departments = Department::getAll();  // Fetch departments for each user
    require __DIR__ . '/../views/list_users.php';
}

function addUser(): void {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = new User(
            email: $_POST['email'] ?? '',
            username: $_POST['username'] ?? '',
            address: $_POST['address'] ?? null,
            telephone: $_POST['telephone'] ?? null,
            comments: $_POST['comments'] ?? null,
            department: $_POST['department'] ?? null
        );
        User::create(get_object_vars($user));
    }
    require __DIR__ . '/../views/add_user.php';
}

function viewUser(): void {
    // Implement view logic here using PHP 8 features
}
