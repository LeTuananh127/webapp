<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Student::factory()->count(10)->create();

        Student::create([
            'firstname' => 'Le Thu',
            'lastname' => 'Nguyen',
            'dob' => '1980-02-01',
            'address' => 'Hanoi, Vietnam',
        ]);
    
        Student::create([
            'firstname' => 'Minh',
            'lastname' => 'Tran',
            'dob' => '1977-02-01',
            'address' => 'Auckland, New Zealand',
        ]);
    }
}
