<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $experiences = [
            [
                'company' => 'PT. Nutrifood Indonesia',
                'user_id' => 1,
                'title' => 'Web Developer',
                'description' => 'Part of Resource and Development, create Report Management application',
                'from_date' => '2019-06-02',
                'to_date' => '2019-12-12',
            ],
            [
                'company' => 'PT. Shibly Technology',
                'user_id' => 1,
                'title' => 'Web Engineer',
                'description' => 'Think twice, code once.',
                'from_date' => '2020-07-04',
                'to_date' => '2029-01-24',
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
