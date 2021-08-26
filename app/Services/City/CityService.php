<?php

namespace App\Services\City;

use App\Repositories\City\CityRepository;


class CityService
{
    private CityRepository $repository;

    public function __construct(CityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
      return $this->repository->getAll();
    }

    public function store(array $request)
    {
        return $this->repository->storeItem($request);
    }

    public function update(int $id, array $request)
    {
        return $this->repository->updateItem($id, $request);
    }

    public function delete(int $id)
    {
        return $this->repository->deleteItem($id);
    }
}
