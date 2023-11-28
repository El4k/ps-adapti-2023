<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $likes = $this->faker->randomElements(['reading', 'coding', 'traveling', 'cooking'], $count = 2);
        $jobApplication = $this->faker->boolean;

        return [
            'nome' => substr(str_pad($this->faker->name, 10), 0, 10),


            // Generates a fake name (could be Brazilian/Portuguese)
            'descricao' => $jobApplication ? $this->generateJobApplicationText() : $this->generateLikesText($likes),
            'contratado' => false,
            'imagem' => $this->faker->randomElement([
                'https://randomuser.me/api/portraits/men/',
                'https://randomuser.me/api/portraits/women/',
            ]) . $this->faker->numberBetween(1, 99) . '.jpg',
            'curso_id' => function () {
                return \App\Models\Curso::factory()->create()->id;
            },
        ];
    }

    /**
     * Generate text based on likes.
     *
     * @param array $likes
     * @return string
     */
    private function generateLikesText(array $likes)
    {
        return "I enjoy " . implode(', ', $likes) . ". ";
    }

    /**
     * Generate text for a job application.
     *
     * @return string
     */
    private function generateJobApplicationText()
    {
        $positions = $this->faker->randomElements(['developer', 'designer', 'manager'], $count = 1);
        $yearsOfExperience = $this->faker->numberBetween(1, 10);

        return "I am applying for the position of " . implode(', ', $positions) . " with $yearsOfExperience years of experience. ";
    }
}
