<?php

namespace Database\Factories;

use App\Models\UserComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$this->faker->seed(1234);
        return [
            //

            'comment' => $this->faker->text,
            'author_id' =>$this->faker->numberBetween(1000,100000),
        ];
    }
}
