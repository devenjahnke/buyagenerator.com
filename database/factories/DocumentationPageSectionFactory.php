<?php

namespace Database\Factories;

use App\Models\DocumentationPageSection;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentationPageSectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocumentationPageSection::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'content' => $this->faker->paragraphs(3, true),
            'order' => $this->faker->numberBetween(1, 100),
        ];
    }
}
