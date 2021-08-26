<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductDiscountRepository;

class ProductDiscountService
{
    private ProductDiscountRepository $repository;

    /**
     * @param ProductDiscountRepository $repository
     */
    public function __construct(ProductDiscountRepository $repository)
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
