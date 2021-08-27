<?php

namespace App\Repositories\Product;

use App\Models\Product\Product;

class ProductRepository
{
    private Product $product;

    /**
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->product->latest()
            ->with(['productDiscount' => function ($query) {
                $query->select('id', 'value');
        }])->get();
    }

    /**
     * @param array $request
     * @return mixed
     */
    public function storeItem(array $request)
    {
        return $this->product->create($request);
    }

    /**
     * @param int $id
     * @param array $request
     * @return mixed
     */
    public function updateItem(int $id, array $request)
    {
        $item = $this->findItem($id);

        return $this->product
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

        return $this->product->destroy($item->id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    private function findItem(int $id)
    {
        $item = $this->product->find($id);

        if (!$item) {
            throw new \Error("ID inexistente");
        }

        return $item;
    }
}
