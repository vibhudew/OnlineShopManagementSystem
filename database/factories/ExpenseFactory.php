<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'category' => $this->faker->randomElement(array('Rent','Bill','Marketing')),
            'date' => $this->faker->date,
            'amount' => $this->faker->numberBetween(30000,50000),
            'contact' => $this->faker->randomElement(array('Riyaj','Siiraj','Marting')),
            'description' => $this->faker->randomElement(array('Riyaj','Siiraj','Marting')),
        ];
    }
}
