<?php

namespace Database\Seeders;
use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Client::factory()->count(50)->create(); // This will create 50 fake client records
        // $this->call(ClientsTableSeeder::class);
    }
}
