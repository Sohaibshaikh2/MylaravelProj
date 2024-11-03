<?php

namespace Database\Seeders;

use App\Models\Employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
    $json=File::get(path:'database/json/employe.json');

    $Employes=collect(json_decode($json));

    $Employes->each(function($Employes){

        Employe::create([

            "Employe_Name"=>$Employes->Employe_Name,
            "Employe_age"=>$Employes->Employe_age,
            "Employe_Email"=>$Employes->Employe_Email   
        ]);

    });
        //
    }
}
