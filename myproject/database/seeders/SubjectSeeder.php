<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\subject;
use Illuminate\Support\Facades\File;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {

        $json=File::get(path:'database/json/subject.json');

        $subjects=collect(json_decode($json));
        // $subjects=collect(
        //     [

        //         [
        //             'SubName'=>'Urdu'
        //         ],
    
        //         [
        //             'SubName'=>'Math'
        //         ],
    
        //         [
        //             'SubName'=>'Chemistry'
        //         ]
    
        //     ]
        // );

        // $subjects->each(function($subject){

        //         subject::insert($subject);

        // });

        $subjects->each(function($subject){

            subject::create([

                'SubName'=>$subject->SubName
            ]);
        });
        }
}
