<?php

namespace Database\Seeders;

use App\Models\counter;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // counter::factory(1)->create();
        // Product::factory(5)->create();

        // Invoice::factory(10)->create();
        // Customer::factory(10)->create();
        InvoiceItem::factory(5)->create();


    ;
    }
}
