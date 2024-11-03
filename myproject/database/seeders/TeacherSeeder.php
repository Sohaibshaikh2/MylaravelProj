<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json =File::get(path:'database/json/teacher.json');

        $teachers=collect(json_decode($json));

        $teachers->each(function($teacher){

            Teacher::create([

                'techer_name'=>$teacher->techer_name,

            ]);
        });
    }
}
