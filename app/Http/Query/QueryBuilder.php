<?php

namespace App\Http\Query;

class QueryBuilder
{

    private array $defaultValue = [
        "orderBy" => "asc",
        "with" => [],
        "limit" => 15,
        "cols" => "*"
    ];

    public function resolve(array $query)
    {
        if (is_array($query)) {
            foreach ($query as $k => $v) {
                if (key_exists($k, $this->defaultValue)) {
                    $this->defaultValue[$k] = $v;
                }
            }
        }
        return $this->defaultValue;
    }
}
