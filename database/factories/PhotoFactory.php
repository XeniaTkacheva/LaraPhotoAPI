<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(15),
            'description' => $this->faker->text(120),
            'author_id' => $this->faker->numberBetween(1, 5),
            'album_id' => $this->faker->numberBetween(1, 6),
            'photo' => $this->faker->sha256 . 'jpg',
        ];
    }
}
