<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //injectador de datos aleatorios
        factory(App\Dispensador::class, 20)->create();
    }
}
