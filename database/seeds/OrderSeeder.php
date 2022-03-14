<?php


use App\Oders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Oders::create([
            'user_id' => 2 ,
            'size' => '12m',
            'delivery_address' => 'G-23ZOFA',
            'total' => 12.400,
        ]);
        Oders::create([
            'user_id' => 5 ,
            'size' => '5m',
            'delivery_address' => 'G-23ZOFA5',
            'total' => 12.60,
        ]);
        Oders::create([
            'user_id' => 6 ,
            'size' => '2m',
            'delivery_address' => 'F-23ZOFA5',
            'total' => 12,
        ]);
        Oders::create([
            'user_id' => 7 ,
            'size' => '6m',
            'delivery_address' => 'D-23ZOFA5',
            'total' => 2,
        ]);
    }
}
