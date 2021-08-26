<?php

namespace App\Http\Controllers\Api\City;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\City\CityService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * @var CityService
     */
    private CityService $service;

    /**
     * @param CityService $service
     */
    public function __construct(CityService $service)
    {
        $this->service = $service;
    }


    /**
     * @return JsonResponse
     *
     * Listando todas as cidades cadastradas
     */
    public function index(): JsonResponse
    {
        try {
            $cities = $this->service->getAll();
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao Listar Cidades');
        }

        return ApiResponse::success($cities);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     * Cadastrar uma cidade
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $this->service->store($request->all());
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao cadastrar cidade');
        }

        return ApiResponse::success($request->all(), 'Cadastro realizado com sucesso', 201);
    }

    /**
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     *
     * Atualizando uma cidade
     */
    public function update(int $id, Request $request): JsonResponse
    {
        try {
            $this->service->update($id, $request->all());
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao atualizar cidade');
        }

        return ApiResponse::success($request->all(), 'Cadastro atualizado com sucesso', 201);
    }

    public function delete(int $id): JsonResponse
    {
        try {
            $this->service->delete($id);
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao atualizar cidade');
        }

        return ApiResponse::success(null, 'Cidade removida com sucesso');
    }
}
