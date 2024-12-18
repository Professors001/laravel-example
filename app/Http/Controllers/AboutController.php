<?php

namespace App\Http\Controllers;

class AboutController
{
    public function index() {
        $projects = collect([
            [
                'id' => 1,
                'title' => 'Shopping Web Application',
                'role' => 'Backend Developer',
                'language' => 'Go (Golang), PostgreSQL',
                'semester' => '2024 Year 3 Semester 1',
                'responsibilities' => [
                    'Designed the ER diagram and database relationships.',
                    'Wrote backend code following Clean Architecture principles.',
                    'Implemented entity definitions and CRUD operations for the database.',
                    'Developed APIs using the Go Fiber framework.',
                    'Tested the APIs using Postman.'
                ]
            ],
            [
                'id' => 2,
                'title' => 'WeMove (Database Study)',
                'role' => 'Database Design and Integration Liaison',
                'language' => 'Database Architecture',
                'semester' => '2023 Year 2 Semester 2',
                'responsibilities' => [
                    'Worked with engineers to obtain and understand database structures.',
                    'Created and implemented database relationships.',
                    'Coordinated the integration of database components with the application.'
                ]
            ],
            [
                'id' => 3,
                'title' => 'Tently (Friend Tracking App)',
                'role' => 'Full-Stack Developer',
                'language' => 'Dart, Google Firebase',
                'semester' => '2023 Year 2 Semester 2',
                'responsibilities' => [
                    'Designed and developed the login and registration system.',
                    'Designed and developed the user profile and naming system.',
                    'Developed the friend system as designed by the group member.',
                    'Designed and developed the database for location data and implemented real-time updates.'
                ]
            ],
            [
                'id' => 4,
                'title' => 'Line AI ChatBot',
                'role' => 'Full-Stack Developer',
                'language' => 'Python',
                'semester' => '2023 Year 2 Semester 1',
                'responsibilities' => [
                    'Developed and optimized an AI model for natural language understanding.',
                    'Deployed the chatbot on Google Cloud and integrated it with the Line application for live use.'
                ]
            ],
            [
                'id' => 5,
                'title' => 'NEBB Application (Event Management App)',
                'role' => 'Full-Stack Developer',
                'language' => 'Java, Scene Builder',
                'semester' => '2023 Year 2 Semester 1',
                'responsibilities' => [
                    'Led the project from start to finish.',
                    'Designed and developed all classes within the application.',
                    'Designed and developed all services within the application.',
                    'Managed and maintained the database.',
                    'Conducted testing and debugging to ensure application quality.'
                ]
            ]
        ]);

        return view('about.index' , ['projects' => $projects]);
    }
}
