<?php

namespace Database\Factories;

use App\Models\DocumentationPage;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentationPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocumentationPage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(4, true),
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->text,
        ];
    }
}
