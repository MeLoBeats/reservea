<?php

namespace Database\Factories\Helpers;

class FactoryHelper
{
    public static function getRandomIdOrCreate($model)
    {
        $count = count($model::all());
        if ($model::all() !== []) {
            return rand(1, $count);
        } else {
            return $model::factory()->create()->id;
        }
    }
}
