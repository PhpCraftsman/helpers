<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PhpCraftsman\Models\Type;

class TypeFactory extends Factory
{
    protected $model = Type::class;

    /**
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'waiting',
            'title' => 'В ожидании',
            'type' => 'status',
        ];
    }
}