<?php

use Illuminate\Database\Seeder;
use App\Models\Sale;
class SaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     Sale::create(
         [  'id'      =>0,
            'percent' =>0,
         ]);
     Sale::create(['percent' =>10,]);
     Sale::create(['percent' =>20,]);
     Sale::create(['percent' =>30,]);

    }
}
