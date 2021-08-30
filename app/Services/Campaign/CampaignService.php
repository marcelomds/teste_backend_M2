<?php

namespace App\Services\Campaign;

use App\Repositories\Campaign\CampaignRepository;


class CampaignService
{
    private CampaignRepository $repository;

    /**
     * @param CampaignRepository $repository
     */
    public function __construct(CampaignRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->repository->getItems();
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
