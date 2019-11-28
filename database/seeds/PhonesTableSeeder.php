<?php

use App\Phone;
use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phone = new Phone();
        $phone->id = 1;
        $phone->name = 'Iphone XS max Pro';
        $phone->price = 23000000;
        $phone->save();

        $phone = new Phone();
        $phone->id = 2;
        $phone->name = 'Samsung Note 10 Plus';
        $phone->price = 18000000;
        $phone->save();

        $phone = new Phone();
        $phone->id = 3;
        $phone->name = 'Iphone 11 Pro';
        $phone->price = 50000000;
        $phone->save();
    }
}
