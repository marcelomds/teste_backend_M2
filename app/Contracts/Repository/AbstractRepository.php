<?php


namespace App\Contracts\Repository;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
abstract class AbstractRepository
{
    /**
     * @var Model|Builder
     */

    protected $model;


    /**
     * @param $model
     */
    protected function setModel($model)
    {
        $this->model = $model;
    }


    /**
     * @return Builder|Model
     */
    public function getModel()
    {
        return $this->model;
    }
}
