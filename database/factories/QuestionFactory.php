<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Caregory;
use App\Models\User;
class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title= $this->faker->sentence;
        return [
            'title'=> $title,
            'slug'=> Str::slug($title),
            'body' => $this->faker->text,
            'category_id'=> function(){
                return Caregory::all()->random();
            },
            'user_id'=> function(){
                return User::all()->random();
            }
        ];
    }
}
