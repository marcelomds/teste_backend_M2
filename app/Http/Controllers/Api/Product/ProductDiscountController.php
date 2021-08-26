<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\Product\ProductDiscountService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductDiscountController extends Controller
{
    private ProductDiscountService $service;

    /**
     * @param ProductDiscountService $service
     */
    public function __construct(ProductDiscountService $service)
    {
        $this->service = $service;
    }

    /**
     * @return JsonResponse
     *
     * Listando todos os descontos de produtos
     */
    public function index(): JsonResponse
    {
        try {
            $products = $this->service->index();
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao listar descontos');
        }

        return ApiResponse::success($products);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     * Cadastrar um desconto para produto
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $this->service->store($request->all());
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao cadastrar desconto');
        }

        return ApiResponse::success($request->all(), 'Cadastro realizado com sucesso', 201);
    }

    /**
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     *
     * Atualizando um desconto
     */
    public function update(int $id, Request $request): JsonResponse
    {
        try {
            $this->service->update($id, $request->all());
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao atualizar desconto');
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
            ApiResponse::error('', 'Erro ao remover desconto');
        }

        return ApiResponse::success(null, 'Desconto removido com sucesso');
    }
}
