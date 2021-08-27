<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Responses\ApiResponse;
use App\Services\Product\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private ProductService $service;

    /**
     * @param ProductService $service
     */
    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    /**
     * @return JsonResponse
     *
     * Listando todos os produtos cadastrados
     */
    public function index(): JsonResponse
    {
        try {
            $products = $this->service->index();
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao listar produtos');
        }

        return ApiResponse::success($products);
    }

    /**
     * @param ProductStoreRequest $request
     * @return JsonResponse
     *
     * Cadastrar um produto
     */
    public function store(ProductStoreRequest $request): JsonResponse
    {
        try {
            $this->service->store($request->all());
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao cadastrar produto');
        }

        return ApiResponse::success($request->all(), 'Cadastro realizado com sucesso', 201);
    }

    /**
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     *
     * Atualizando um produto
     */
    public function update(int $id, Request $request): JsonResponse
    {
        try {
            $this->service->update($id, $request->all());
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao atualizar produto');
        }

        return ApiResponse::success($request->all(), 'Cadastro atualizado com sucesso', 201);
    }

    /**
     * @param int $id
     * @return JsonResponse
     *
     * Removendo um produto
     */
    public function delete(int $id): JsonResponse
    {
        try {
            $this->service->delete($id);
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao remover produto');
        }

        return ApiResponse::success(null, 'Produto removido com sucesso');
    }
}
