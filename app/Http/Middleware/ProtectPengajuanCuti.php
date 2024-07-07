<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PengajuanCuti;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ProtectPengajuanCuti
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // // Load the related pegawai model
        // $pegawai = Auth::user()->pegawai->id;
        
        // if (!$pegawai) {
        //     // Return an error response if the leave request does not belong to the user
        //     return response()->json(['error' => 'ID tidak ditemukan'], 404);
        // }

        return $next($request);
    }
}
