<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponse
{

    /* 
    *    Build Success Response
    *    @param string/array $data
    *    @param int $code
    *    @return Illuminate\Http\JsonResponse [description]
    */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data], $code);
    }

    /* 
    *    Build Error Response
    *    @param string/array $data
    *    @param int $code
    *    @return Illuminate\Http\JsonResponse [description]
    */
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message], $code);
    }
}
