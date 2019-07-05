<?php

use Illuminate\Database\Seeder;
use App\APICustomer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $customer=new APICustomer();
            $customer->firstname='Season'.mt_rand(0,10);
            $customer->lastname='WBD'.mt_rand(0,10);
            $customer->save();
        }
    }
}
