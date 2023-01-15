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
        return response($data, $code)->header('Content-Type', 'application/json');
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

    public function errorMessage($message, $code)
    {
        return response($message, $code)->header('Content-Type', 'application/json');
    }
}
