<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'type' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'created_at' => '2024-06-13 12:08:00',
            'updated_at' => '2024-06-13 12:08:00',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user',
            'type' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'created_at' => '2024-06-13 12:08:00',
            'updated_at' => '2024-06-13 12:08:00',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'West',
            'description' => 'parm',
            'price' => '5.00€',
            'round_desc' => 'tobi',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Chest',
            'description' => 'äge',
            'price' => '5.00€',
            'round_desc' => 'tobi',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'LD',
            'description' => 'lahja',
            'price' => '5.00€',
            'round_desc' => 'tobi',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'LM',
            'description' => 'lamp',
            'price' => '5.00€',
            'round_desc' => 'tobi',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Camel',
            'description' => 'banger',
            'price' => '5.00€',
            'round_desc' => 'tobi',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Marboro',
            'description' => 'oss',
            'price' => '5.00€',
            'round_desc' => 'tobi',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Winston',
            'description' => 'sigma',
            'price' => '5.00€',
            'round_desc' => 'tobi',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Parliament',
            'description' => 'og',
            'price' => '5.00€',
            'round_desc' => 'tobi',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Kent',
            'description' => 'hall',
            'price' => '5.00€',
            'round_desc' => 'tobi',
        ]);
    }
}