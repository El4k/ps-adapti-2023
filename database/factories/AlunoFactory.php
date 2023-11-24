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
        return [
            'nome' => $this->faker->name,
            'descricao' => $this->faker->paragraph,
            'formado' => $this->faker->boolean,
            'imagem' => $this->faker->imageUrl,
            'curso_id' => function () {
                return \App\Models\Curso::factory()->create()->id;
            },
        ];
    }
}
