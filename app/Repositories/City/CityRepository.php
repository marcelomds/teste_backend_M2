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
    public function getAll()
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
        return $this->city->where('id', $id)->update($request);
    }

    /**
     * @param int $id
     * @return int
     */
    public function deleteItem(int $id)
    {
        return $this->city->destroy($id);
    }
}
