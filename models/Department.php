<?php
declare(strict_types=1);

require_once __DIR__ . '/../config.php';

class Department {
    public function __construct(
        public string $name
    ) {}

    public static function getAll(): array {
        // Retrieve all departments from the database
        return [];
    }

    public static function create(array $data): void {
        // Insert a new department into the database
    }

    public static function delete(int $id): void {
        // Delete a department from the database by its ID
    }
}
