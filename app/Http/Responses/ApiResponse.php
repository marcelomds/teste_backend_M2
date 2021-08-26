<?php


namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    /**
     * @param null $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    public static function success($data = null, string $message = 'Sucesso', int $status = 200): JsonResponse
    {
        return response()->json([
            'status'  => true,
            'data'    => $data,
            'message' => $message
        ], $status);
    }

    /**
     * @param $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    public static function error($data = null, string $message = 'Erro', int $status = 400): JsonResponse
    {
        return response()->json([
            'status'  => false,
            'data'    => $data,
            'message' => $message
        ], $status);
    }
}
