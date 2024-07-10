<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1000)->create();
        User::factory()->create([
            'id_card_number' => '8274819283712381',
            'driving_license_number' => 'asdjhkjwhdkjwhd',
        ]);
    }
}
