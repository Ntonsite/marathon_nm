<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loan;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 100; $i++){
            Loan::create([
             'name'=>$faker->name,
             'location'=>$faker->address,
             'phone'=>'0714377516',
             'amount'=>$faker->numberBetween(1000,200000),
             'maturity'=>$faker->numberBetween(1,24),
             'status'=>'pending',
             'reason'=>$faker->text
            ]);
        } 
    }
}
