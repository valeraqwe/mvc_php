<?php
declare(strict_types=1);

require_once __DIR__ . '/../config.php';

class User {
    public function __construct(
        public string $email,
        public string $username,
        public ?string $address = null,
        public ?string $telephone = null,
        public ?string $comments = null,
        public ?string $department = null
    ) {}

    public static function getAll(): array {
        // Retrieve all users from the database
        return [];
    }

    public static function create(array $data): void {
        // Insert a new user into the database
    }
}