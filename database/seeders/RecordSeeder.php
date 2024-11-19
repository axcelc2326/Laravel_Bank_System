<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Record; // Ensure this is correctly cased

class RecordSeeder extends Seeder
{
    public function run()
    {
        // Create 50 fake records using the correctly named factory
        Record::factory()->count(50)->create(); // Use Record (singular, capital R)
    }
}
