<?php

namespace Database\Seeders;
use App\Models\Admins;
use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
	/**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admins::class;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Admins::factory(3)->create();
    }
}
