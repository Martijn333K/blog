<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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
        $user = User::factory()->create([
            'name' => 'Martijn',
            'username' => 'Martijn',
            'email' => 'martijn@maxub.nl'

        ]);

        Category::factory(3)->create([
        ]);
    }
}
