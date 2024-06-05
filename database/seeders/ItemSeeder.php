<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run()
    // {
    //     Item::factory()->count(5)->create();
    // }

    public function run(): void
    {
        // User::factory(10)->create();

        Item::factory()->create([
            'title' => 'Test User',
            'body' => 'test@example.com',
        ]);
    }
}
