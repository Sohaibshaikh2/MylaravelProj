<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $filable=[
        'total',
        'customer_id',
        'sub_total',
        'data',
        'due_date',
        'reference',
        'discount',
        'number',
        'terms_and_conditions',

    ];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
