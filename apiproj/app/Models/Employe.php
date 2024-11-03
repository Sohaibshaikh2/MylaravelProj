<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $primaryKey = 'Employe_Id';
    protected $table = 'Employes'; 
    protected $fillable = ['Employe_Name', 'Employe_age', 'Employe_Email'];
}
