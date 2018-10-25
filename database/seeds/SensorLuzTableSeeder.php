<?php

use Illuminate\Database\Seeder;

class SensorLuzTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SensorLuz::class, 1000)->create();
    }
}
