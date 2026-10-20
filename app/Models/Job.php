<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job
{
    public static function jobs()
    {
        return [
            [
                'id' => 1,
                'title' => 'Senior Laravel Developer',
                'description' => 'We are looking for a Senior Laravel Developer to join our team.',
                'location' => 'New York, NY',
                'salary' => '$80,000 - $100,000',
            ],
            [
                'id' => 2,
                'title' => 'Frontend Developer',
                'description' => 'We are seeking a skilled Frontend Developer to work on our web applications.',
                'location' => 'San Francisco, CA',
                'salary' => '$70,000 - $90,000',
            ],
            [
                'id' => 3,
                'title' => 'Backend Developer',
                'description' => 'Join our backend development team to build robust APIs and services.',
                'location' => 'Remote',
                'salary' => '$75,000 - $95,000',
            ],
        ];
    }
}
