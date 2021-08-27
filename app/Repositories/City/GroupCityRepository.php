<?php

namespace App\Repositories\City;

use App\Models\City\GroupCity;

class GroupCityRepository
{
    private GroupCity $groupCity;

    /**
     * @param GroupCity $groupCity
     */
    public function __construct(GroupCity $groupCity)
    {
        $this->groupCity = $groupCity;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->groupCity
            ->latest()
            ->with('cities')
            ->get();
    }

    /**
     * @param array $request
     * @return mixed
     */
    public function storeItem(array $request)
    {
        return $this->groupCity->create($request);
    }

    /**
     * @param int $id
     * @param array $request
     * @return mixed
     */
    public function updateItem(int $id, array $request)
    {
        $item = $this->findItem($id);

        return $this->groupCity
            ->where('id', $item->id)
            ->update($request);
    }

    /**
     * @param int $id
     * @return int
     */
    public function deleteItem(int $id)
    {
        $item = $this->findItem($id);

        return $this->groupCity->destroy($item->id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    private function findItem(int $id)
    {
        $item = $this->groupCity->find($id);

        if (!$item) {
            throw new \Error("ID inexistente");
        }

        return $item;
    }
}
