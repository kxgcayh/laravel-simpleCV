<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $educations = [
            [
                'institution' => 'SMK Wikrama Bogor',
                'user_id' => 1,
                'major' => 'Software Engineering',
                'edu_description' => 'Learn basic programming languages.',
                'date' => '2020-03-01',
            ],
            [
                'institution' => 'SMP Negeri 3 Bogor',
                'user_id' => 1,
                'major' => 'Junior High School',
                'edu_description' => 'Active at organization',
                'date' => '2016-03-01',
            ],
            [
                'institution' => 'SMP Negeri 3 Bogor',
                'user_id' => 1,
                'major' => 'Student Council',
                'edu_description' => 'Active at organization',
                'date' => '2015-03-01',
            ],
        ];

        foreach ($educations as $education) {
            Education::create($education);
        }
    }
}
