<?php

namespace App\Helpers;

class ApiResponse
{
    public static function success($data = null, string $message = 'OK', int $status = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data,
        ], $status);
    }

    public static function created($data = null, string $message = 'Created')
    {
        return self::success($data, $message, 201);
    }

    public static function error(string $message = 'Error', int $status = 400, $errors = null)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors'  => $errors,
        ], $status);
    }

    public static function notFound(string $message = 'Resource not found')
    {
        return self::error($message, 404);
    }

    public static function validationFailed($errors)
    {
        return self::error('Validation failed', 422, $errors);
    }

    public static function serverError(string $message = 'Internal server error', $errorId = null)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'error_id' => $errorId,
        ], 500);
    }

    
}
