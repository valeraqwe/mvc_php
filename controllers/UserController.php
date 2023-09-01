<?php
require_once __DIR__ . '/../models/User.php';

function listUsers() {
    $users = User::getAll();
    require __DIR__ . '/../views/list_users.php';
}

function addUser() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        User::create($_POST);
    }
    require __DIR__ . '/../views/add_user.php';
}

function viewUser() {
    // Implement view logic
}