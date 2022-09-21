<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"          => $this->faker->name(),
            "roll"          => $this->faker->unique()->numberBetween(1000, 9999),
            "registration"  => $this->faker->numberBetween(1000000, 9999999),
            "year"          => $this->faker->numberBetween(2000, 2030),
            "grade"         => $this->faker->randomElement(["A+", "A", "A-", "B+", "B", "B-", "C+", "C", "C-", "D+", "D", "D-", "F"]),
            "gpa"           => $this->faker->randomFloat(1, 0, 5),
            "group"         => $this->faker->randomElement(["Science", "Commerce", "Arts"]),

            "bangla"        => $this->faker->numberBetween(0, 100),
            "english"       => $this->faker->numberBetween(0, 100),
            "math"          => $this->faker->numberBetween(0, 100),
            "physics"       => $this->faker->numberBetween(0, 100),
            "chemistry"     => $this->faker->numberBetween(0, 100),
            "biology"       => $this->faker->numberBetween(0, 100),
            "ict"           => $this->faker->numberBetween(0, 100),
            "religion"      => $this->faker->numberBetween(0, 100),
            "social_science"=> $this->faker->numberBetween(0, 100),

            "bangla_grade"        => $this->faker->randomElement(["A+", "A", "A-", "B+", "B", "B-", "C+", "C", "C-", "D+", "D", "D-", "F"]),
            "english_grade"       => $this->faker->randomElement(["A+", "A", "A-", "B+", "B", "B-", "C+", "C", "C-", "D+", "D", "D-", "F"]),
            "math_grade"          => $this->faker->randomElement(["A+", "A", "A-", "B+", "B", "B-", "C+", "C", "C-", "D+", "D", "D-", "F"]),
            "physics_grade"       => $this->faker->randomElement(["A+", "A", "A-", "B+", "B", "B-", "C+", "C", "C-", "D+", "D", "D-", "F"]),
            "chemistry_grade"     => $this->faker->randomElement(["A+", "A", "A-", "B+", "B", "B-", "C+", "C", "C-", "D+", "D", "D-", "F"]),
            "biology_grade"       => $this->faker->randomElement(["A+", "A", "A-", "B+", "B", "B-", "C+", "C", "C-", "D+", "D", "D-", "F"]),
            "ict_grade"           => $this->faker->randomElement(["A+", "A", "A-", "B+", "B", "B-", "C+", "C", "C-", "D+", "D", "D-", "F"]),
            "religion_grade"      => $this->faker->randomElement(["A+", "A", "A-", "B+", "B", "B-", "C+", "C", "C-", "D+", "D", "D-", "F"]),
            "social_science_grade"=> $this->faker->randomElement(["A+", "A", "A-", "B+", "B", "B-", "C+", "C", "C-", "D+", "D", "D-", "F"]),

            "bangla_gpa"        => $this->faker->numberBetween(0, 5),
            "english_gpa"       => $this->faker->numberBetween(0, 5),
            "math_gpa"          => $this->faker->numberBetween(0, 5),
            "physics_gpa"       => $this->faker->numberBetween(0, 5),
            "chemistry_gpa"     => $this->faker->numberBetween(0, 5),
            "biology_gpa"       => $this->faker->numberBetween(0, 5),
            "ict_gpa"           => $this->faker->numberBetween(0, 5),
            "religion_gpa"      => $this->faker->numberBetween(0, 5),
            "social_science_gpa"=> $this->faker->numberBetween(0, 5),

            
        ];
    }
}
