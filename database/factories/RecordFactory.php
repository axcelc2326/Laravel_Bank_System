<?php

namespace Database\Factories;

use App\Models\Record;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
{
    protected $model = Record::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'deposit_amount' => $this->faker->randomFloat(2, 100, 10000), // Random deposit between 100 and 10000
            'bank_name' => $this->faker->company, // Random bank name
        ];
    }
}
