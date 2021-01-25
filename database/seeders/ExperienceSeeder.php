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
                'company' => 'PT. SHIBLY TEKNOLOGI SOLUSI',
                'user_id' => 1,
                'exp_title' => 'Web Developer',
                'exp_description' => 'STS is Indonesian leading IT system integrations and services provider  that helping customers to plan, build and manage their IT Infrastructure by offering a unique competences and solutions. STS has marked its flagship in 3 countries.',
                'from_date' => '2020-04-05',
                'to_date' => '2030-04-05',
            ],
            [
                'company' => 'PT. Nutrifood Indonesia',
                'user_id' => 1,
                'exp_title' => 'Student Intern - Web Developer',
                'exp_description' => 'This company is engaged in healthy food and it is one of the big companies in Indonesia. I am here for six months and finished my project. I was learn a lot here.',
                'from_date' => '2019-07-04',
                'to_date' => '2020-01-24',
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
