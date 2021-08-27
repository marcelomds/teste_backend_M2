<?php

namespace App\Repositories\City;

use App\Models\City\City;

class CityRepository
{

    private City $city;

    /**
     * @param City $city
     */
    public function __construct(City $city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->city
            ->latest()
            ->with(['groupCity' => function ($query) {
                $query->select('id', 'name');
        }])->get();
    }

    /**
     * @param array $request
     * @return mixed
     */
    public function storeItem(array $request)
    {
        return $this->city->create($request);
    }

    /**
     * @param int $id
     * @param array $request
     * @return mixed
     */
    public function updateItem(int $id, array $request)
    {
        $item = $this->findItem($id);

        return $this->city
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

        return $this->city->destroy($item->id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    private function findItem(int $id)
    {
        $item = $this->city->find($id);

        if (!$item) {
            throw new \Error("ID inexistente");
        }

        return $item;
    }
}
