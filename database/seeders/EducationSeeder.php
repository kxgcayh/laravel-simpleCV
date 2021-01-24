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
                'edu_description' => 'Never learn a lot there',
                'date' => '2020-03-01',
            ],
            [
                'institution' => 'SMP Negeri 3 Bogor',
                'user_id' => 1,
                'major' => 'Head Master of Abroy',
                'edu_description' => 'Syalalasyilili',
                'date' => '2016-03-01',
            ],
        ];

        foreach ($educations as $education) {
            Education::create($education);
        }
    }
}
