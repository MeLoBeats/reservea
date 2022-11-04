<?php

namespace App\Repository\V1;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

abstract class Repository
{

    protected $model;

    public function getAll($queries, $cols = null)
    {
        try {
            return DB::transaction(function () use ($queries, $cols) {
                $this->model::preventsLazyLoading();
                $paginate = $this->model::orderBy('id', $queries['orderBy'])->paginate($queries['limit'], $cols ?? $queries['cols']);
                $paginate->load($queries['with']);
                return $paginate;
            });
        } catch (NotFoundHttpException $e) {
            throw new $e("Impossible de charger les données");
        }
    }
}
