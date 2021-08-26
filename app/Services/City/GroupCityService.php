<?php

namespace App\Services\City;

use App\Repositories\City\GroupCityRepository;


class GroupCityService
{
    private GroupCityRepository $repository;

    /**
     * @param GroupCityRepository $repository
     */
    public function __construct(GroupCityRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
      return $this->repository->getAll();
    }

    /**
     * @param array $request
     * @return mixed
     */
    public function store(array $request)
    {
        return $this->repository->storeItem($request);
    }

    /**
     * @param int $id
     * @param array $request
     * @return mixed
     */
    public function update(int $id, array $request)
    {
        return $this->repository->updateItem($id, $request);
    }

    /**
     * @param int $id
     * @return int
     */
    public function delete(int $id)
    {
        return $this->repository->deleteItem($id);
    }
}
