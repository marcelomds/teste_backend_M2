<?php

namespace App\Repositories\City;

use App\Models\City\City;

class CityRepository
{

    private City $city;

    public function __construct(City $city)
    {
        $this->city = $city;
    }

    public function getAll()
    {
        return $this->city->latest()->get();
    }

    public function storeItem(array $request)
    {
        return $this->city->create($request);
    }

    public function updateItem(int $id, array $request)
    {
        return $this->city->where('id', $id)->update($request);
    }

    public function deleteItem(int $id)
    {
        return $this->city->destroy($id);
    }
}
