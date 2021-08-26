<?php

namespace App\Repositories\City;

use App\Http\Responses\ApiResponse;
use App\Models\City\City;
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
    public function getAll()
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
        return $this->groupCity->where('id', $id)->update($request);
    }

    /**
     * @param int $id
     * @return int
     */
    public function deleteItem(int $id)
    {
        return $this->groupCity->destroy($id);
    }
}
