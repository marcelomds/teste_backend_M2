<?php

namespace App\Repositories\Campaign;

use App\Models\Campaign\Campaign;

class CampaignRepository
{
    private Campaign $campaign;

    /**
     * @param Campaign $campaign
     */
    public function __construct(Campaign $campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->campaign
            ->latest()
            ->with(['groupCity', 'product' => function ($query) {
                $query->select('id', 'name');
            }])->get();
    }

    /**
     * @param array $request
     * @return mixed
     */
    public function storeItem(array $request)
    {
        return $this->campaign->create($request);
    }

    /**
     * @param int $id
     * @param array $request
     * @return mixed
     */
    public function updateItem(int $id, array $request)
    {
        $item = $this->findItem($id);

        return $this->campaign
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

        return $this->campaign->destroy($item->id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    private function findItem(int $id)
    {
        $item = $this->campaign->find($id);

        if (!$item) {
            throw new \Error("ID inexistente");
        }

        return $item;
    }
}
