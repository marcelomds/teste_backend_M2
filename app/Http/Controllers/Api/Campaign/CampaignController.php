<?php

namespace App\Http\Controllers\Api\Campaign;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\Campaign\CampaignService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    private CampaignService $service;

    /**
     * @param CampaignService $service
     */
    public function __construct(CampaignService $service)
    {
        $this->service = $service;
    }

    /**
     * @return JsonResponse
     *
     * Listando todas as campanhas cadastradas
     */
    public function index(): JsonResponse
    {
        try {
            $campaigns = $this->service->index();
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao listar campanhas');
        }

        return ApiResponse::success($campaigns);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     * Cadastrar uma campanha
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $this->service->store($request->all());
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao cadastrar campanha');
        }

        return ApiResponse::success($request->all(), 'Cadastro realizado com sucesso', 201);
    }

    /**
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     *
     * Atualizando uma campanha
     */
    public function update(int $id, Request $request): JsonResponse
    {
        try {
            $this->service->update($id, $request->all());
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao atualizar campanha');
        }

        return ApiResponse::success($request->all(), 'Cadastro atualizado com sucesso', 201);
    }

    /**
     * @param int $id
     * @return JsonResponse
     *
     * Removendo uma campanha
     */
    public function delete(int $id): JsonResponse
    {
        try {
            $this->service->delete($id);
        } catch (\Exception $e) {
            ApiResponse::error('', 'Erro ao remover campanha');
        }

        return ApiResponse::success(null, 'Campanha removida com sucesso');
    }
}
