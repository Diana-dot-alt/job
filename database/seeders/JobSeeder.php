<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobListing;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $jobs = [
            ['title' => 'Software Developer', 'salary' => 50000, 'description' => 'Responsible for developing software applications.'],
            ['title' => 'Web Developer', 'salary' => 45000, 'description' => 'Builds and maintains websites.'],
            ['title' => 'Front-End Developer', 'salary' => 40000, 'description' => 'Creates user interfaces using HTML, CSS, and JavaScript.'],
            ['title' => 'Back-End Developer', 'salary' => 50000, 'description' => 'Handles server-side logic and databases.'],
            ['title' => 'Full-Stack Developer', 'salary' => 60000, 'description' => 'Works on both front-end and back-end systems.'],
            ['title' => 'Data Analyst', 'salary' => 45000, 'description' => 'Analyzes data to support business decisions.'],
            ['title' => 'Database Administrator', 'salary' => 50000, 'description' => 'Manages and maintains databases.'],
            ['title' => 'Network Administrator', 'salary' => 45000, 'description' => 'Maintains network systems and infrastructure.'],
            ['title' => 'Cybersecurity Analyst', 'salary' => 55000, 'description' => 'Protects systems from cyber threats.'],
            ['title' => 'Mobile App Developer', 'salary' => 50000, 'description' => 'Develops mobile applications.'],
            ['title' => 'UI/UX Designer', 'salary' => 40000, 'description' => 'Designs user-friendly interfaces and experiences.'],
            ['title' => 'DevOps Engineer', 'salary' => 65000, 'description' => 'Manages deployment and system operations.'],
            ['title' => 'QA Tester', 'salary' => 35000, 'description' => 'Tests applications for bugs and issues.'],
            ['title' => 'IT Support Specialist', 'salary' => 30000, 'description' => 'Provides technical support to users.'],
            ['title' => 'System Administrator', 'salary' => 50000, 'description' => 'Maintains and configures servers and systems.'],
        ];

        foreach ($jobs as $job) {
            JobListing::firstOrCreate(
                ['title' => $job['title']],
                ['salary' => $job['salary'], 'description' => $job['description']]
            );
        }
    }
}
