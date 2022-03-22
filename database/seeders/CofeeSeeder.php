<?php

namespace Database\Seeders;
use App\Models\Cofee;
use Illuminate\Database\Seeder;
class CofeeSeeder extends Seeder


{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cofee::Factory(500)-> Create();
    }
}
