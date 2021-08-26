<?php

namespace App\Repositories\Product;

use App\Models\Product\ProductDiscount;

class ProductDiscountRepository
{
    private ProductDiscount $productDiscount;

    /**
     * @param ProductDiscount $productDiscount
     */
    public function __construct(ProductDiscount $productDiscount)
    {
        $this->productDiscount = $productDiscount;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->productDiscount->latest()->get();
    }

    /**
     * @param array $request
     * @return mixed
     */
    public function storeItem(array $request)
    {
        return $this->productDiscount->create($request);
    }

    /**
     * @param int $id
     * @param array $request
     * @return mixed
     */
    public function updateItem(int $id, array $request)
    {
        return $this->productDiscount->where('id', $id)->update($request);
    }

    /**
     * @param int $id
     * @return int
     */
    public function deleteItem(int $id)
    {
        return $this->productDiscount->destroy($id);
    }
}
