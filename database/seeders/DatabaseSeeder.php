<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
        //untuk mengaktifkan hapus slas dengan cara satu persatu
        //pemanggilan (php artisan db:Seed) 

        //  ProvinsiSeeder::class,
         //KotaSeeder::class,
        KecamatanSeeder::class,
        ]);
    }
}
