<?php

namespace App\Models;

class Jobs
{
    public static function all(): array
    {
        return [
            1 => ['title' => 'Software Developer', 'salary' => '₱50,000', 'description' => 'Responsible for developing software applications.'],
            2 => ['title' => 'Web Developer', 'salary' => '₱45,000', 'description' => 'Builds and maintains websites.'],
            3 => ['title' => 'Front-End Developer', 'salary' => '₱40,000', 'description' => 'Creates user interfaces using HTML, CSS, and JavaScript.'],
            4 => ['title' => 'Back-End Developer', 'salary' => '₱50,000', 'description' => 'Handles server-side logic and databases.'],
            5 => ['title' => 'Full-Stack Developer', 'salary' => '₱60,000', 'description' => 'Works on both front-end and back-end systems.'],
            6 => ['title' => 'Data Analyst', 'salary' => '₱45,000', 'description' => 'Analyzes data to support business decisions.'],
            7 => ['title' => 'Database Administrator', 'salary' => '₱50,000', 'description' => 'Manages and maintains databases.'],
            8 => ['title' => 'Network Administrator', 'salary' => '₱45,000', 'description' => 'Maintains network systems and infrastructure.'],
            9 => ['title' => 'Cybersecurity Analyst', 'salary' => '₱55,000', 'description' => 'Protects systems from cyber threats.'],
            10 => ['title' => 'Mobile App Developer', 'salary' => '₱50,000', 'description' => 'Develops mobile applications.'],
            11 => ['title' => 'UI/UX Designer', 'salary' => '₱40,000', 'description' => 'Designs user-friendly interfaces and experiences.'],
            12 => ['title' => 'DevOps Engineer', 'salary' => '₱65,000', 'description' => 'Manages deployment and system operations.'],
            13 => ['title' => 'QA Tester', 'salary' => '₱35,000', 'description' => 'Tests applications for bugs and issues.'],
            14 => ['title' => 'IT Support Specialist', 'salary' => '₱30,000', 'description' => 'Provides technical support to users.'],
            15 => ['title' => 'System Administrator', 'salary' => '₱50,000', 'description' => 'Maintains and configures servers and systems.'],
        ];
    }

    public static function find(int $id): ?array
    {
        return self::all()[$id] ?? null;
    }
}