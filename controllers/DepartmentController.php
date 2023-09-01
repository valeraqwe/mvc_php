<?php
require_once __DIR__ . '/../models/Department.php';

function listDepartments() {
    $departments = Department::getAll();
    require __DIR__ . '/../views/list_departments.php';
}

function addDepartment() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        Department::create($_POST);
    }
    require __DIR__ . '/../views/add_department.php';
}

function deleteDepartment() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        Department::delete($_POST['id']);
    }
    // Redirect back to list of departments
}