<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Helpers\ApiResponse;

class Handler extends ExceptionHandler
{
    protected $dontReport = [];

    public function register(): void
    {
        //
    }

    public function render($request, Throwable $e)
    {
        // Jika request ke API → paksa semua error menjadi JSON
        if ($request->is('api/*')) {

            // 1. VALIDATION ERROR
            return ApiResponse::validationFailed($e->errors());

            // 2. MODEL NOT FOUND (Eloquent)
            if ($e instanceof ModelNotFoundException) {
                return response()->json([
                    'success' => false,
                    'message' => 'Resource not found'
                ], 404);
            }

            // 3. ROUTE NOT FOUND
            return ApiResponse::notFound('Endpoint not found');

            // 4. AUTHENTICATION ERROR
            if ($e instanceof AuthenticationException) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthenticated'
                ], 401);
            }

            // 5. LARAVEL-THROWN HttpException → gunakan status aslinya
            if ($e instanceof HttpException) {
                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage() ?: 'HTTP error'
                ], $e->getStatusCode());
            }

            // 6. FALLBACK (ERROR TIDAK TERDUGA)
            //    → untuk debugging production, kasih "error_id"
            $errorId = uniqid('err_', true);

            // Log ke laravel.log
            \Log::error("API Error {$errorId}", [
                'exception' => $e
            ]);
            return ApiResponse::serverError('Internal server error', $errorId);
        }

        // Default Laravel behavior (non-API routes)
        return parent::render($request, $e);
    }
}
