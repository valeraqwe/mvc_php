<?php
declare(strict_types=1);

require_once __DIR__ . '/../models/Department.php';

function listDepartments(): void {
    $departments = Department::getAll();
    require __DIR__ . '/../views/list_departments.php';
}

function addDepartment(): void {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $department = new Department(
            name: $_POST['name'] ?? ''
        );
        Department::create(get_object_vars($department));
    }
    require __DIR__ . '/../views/add_department.php';
}

function deleteDepartment(): void {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = intval($_POST['id'] ?? 0);
        Department::delete($id);
    }
    // Redirect back to list of departments
}
