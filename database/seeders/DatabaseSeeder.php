<?php

namespace Database\Seeders;

use App\Models\Admins;
use App\Models\Guichets;
use App\Models\Clients;
use App\Models\Voyages;
use App\Models\Places;
use App\Models\Billets;
use App\Models\Paiements;

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
        Admins::factory(3)->create();
        Guichets::factory(4)->create();
        Clients::factory(50)->create();
        Voyages::factory(5)->create();
        Places::factory(10)->create();
        Billets::factory(100)->create();
        Paiements::factory(20)->create();
    }
}
