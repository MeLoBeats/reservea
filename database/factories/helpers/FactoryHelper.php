<?php

namespace Database\Factories\Helpers;

class FactoryHelper
{
    public static function getRandomIdOrCreate(string $model)
    {
        $count = $model::query()->count();

        if ($count === 0) {
            // if model count is 0
            // we should create a new record and retrieve the record id
            return $model::factory()->create()->id;
        } else {
            // generate random numberbetween 1 and model coubt
            return rand(1, $count);
        }
    }
}
