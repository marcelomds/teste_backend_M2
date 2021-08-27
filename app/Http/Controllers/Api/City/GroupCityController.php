<?php

namespace App\Http\Controllers\Api\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\City\GroupCityStoreRequest;
use App\Http\Requests\City\GroupCityUpdateRequest;
use App\Http\Responses\ApiResponse;
use App\Services\City\GroupCityService;
use Illuminate\Http\JsonResponse;

class GroupCityController extends Controller
{
    private GroupCityService $service;

    /**
     * @param GroupCityService $service
     */
    public function __construct(GroupCityService $service)
    {
        $this->service = $service;
    }

    /**
     * @return JsonResponse
     *
     * Listando todos os grupos cidades cadastrados
     */
    public function index(): JsonResponse
    {
        try {
            $groupCities = $this->service->index();
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao listar grupos');
        }

        return ApiResponse::success($groupCities);
    }

    /**
     * @param GroupCityStoreRequest $request
     * @return JsonResponse
     *
     * Cadastrar um grupo de cidade
     */
    public function store(GroupCityStoreRequest $request): JsonResponse
    {
        try {
            $this->service->store($request->all());
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao cadastrar grupo de cidade');
        }

        return ApiResponse::success($request->all(), 'Cadastro realizado com sucesso', 201);
    }

    /**
     * @param int $id
     * @param GroupCityUpdateRequest $request
     * @return JsonResponse
     *
     * Atualizando um grupo de cidade
     */
    public function update(int $id, GroupCityUpdateRequest $request): JsonResponse
    {
        try {
            $this->service->update($id, $request->all());
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao atualizar grupo de cidade');
        }

        return ApiResponse::success($request->all(), 'Cadastro atualizado com sucesso', 201);
    }

    /**
     * @param int $id
     * @return JsonResponse
     *
     * Removendo um grupo de cidade
     */
    public function delete(int $id): JsonResponse
    {
        try {
            $this->service->delete($id);
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao remover grupo de cidade');
        }

        return ApiResponse::success(null, 'Grupo de cidade removido com sucesso');
    }
}
