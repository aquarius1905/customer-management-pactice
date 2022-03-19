<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $address = $this->faker->address();
        return [
            'name' => $this->faker->lastName.'　'.$this->faker->firstName,
            'furignama' => $this->faker->lastNameKana.'　'.$this->faker->firstNameKana,
            'email' => $this->faker->unique()->safeEmail,
            'postcode' => $address->zipcode(),
            'postcode' => $address->zipcode(),
            'tel' => $this->faker->phoneNumber(),
            'birthday' => $this->faker->date($format='Y-m-d',$max='now'),
            'sex' => $this->$faker->randomElement($array=['男','女']),
            'inquiry' => $this->faker->realText(10)
        ];
    }
}
