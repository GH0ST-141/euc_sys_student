<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=CourseSeeder
     */
    public function run(): void
    {
        $courses = [
            [
                'id' => 'BSCS',
                'name' => 'Bachelor of Science in Computer Science'
            ],
            [
                'id' => 'BSCOE',
                'name' => 'Bachelor of Science in Computer Engineering'
            ],
            [
                'id' => 'BSN',
                'name' => 'Bachelor of Science in Nursing'
            ],
            [
                'id' => 'BSA',
                'name' => 'Bachelor of Science in Accountancy'
            ],
            [
                'id' => 'BSEE',
                'name' => 'Bachelor of Secondary Education Major in English'
            ],
            [
                'id' => 'BSEM',
                'name' => 'Bachelor of Secondary Education Major in Mathematics'
            ],
            [
                'id' => 'BSES',
                'name' => 'Bachelor of Secondary Education Major in Science'
            ],
            [
                'id' => 'BSESS',
                'name' => 'Bachelor of Secondary Education Major in Social Studies'
            ],
            [
                'id' => 'BSEF',
                'name' => 'Bachelor of Secondary Education Major in Filipino'
            ],
            [
                'id' => 'BSELEM',
                'name' => 'Bachelor of Elementary Education'
            ],
            [
                'id' => 'BAP',
                'name' => 'Bachelor of Arts in Psychology'
            ],
            [
                'id' => 'BSHM',
                'name' => 'Bachelor of Science in Hospitality Management'
            ],
            [
                'id' => 'BSTM',
                'name' => 'Bachelor of Science in Tourism Management'
            ],
        ];

        foreach($courses as $course) {
            Course::create($course);
        }
    }
}
