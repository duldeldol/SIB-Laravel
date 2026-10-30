<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Verifikasi apakah pengguna telah terautentikasi via JWT (guard api)
        if (!auth('api')->check()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized. Silakan login terlebih dahulu untuk mengakses sumber daya ini.'
            ], 401);
        }

        // 2. Verifikasi hak akses (RBAC) - hanya pengguna dengan role admin yang diizinkan
        if (auth('api')->user()->role !== 'admin') {
            return response()->json([
                'success' => false,
                'message' => 'Forbidden. Akses ditolak, operasi ini hanya dapat dilakukan oleh admin.'
            ], 403);
        }

        return $next($request);
    }
}
