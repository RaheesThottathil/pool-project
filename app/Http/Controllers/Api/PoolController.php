<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pool;
use Illuminate\Http\Request;

class PoolController extends Controller
{
    public function index(Request $request)
    {
        $query = Pool::query();

        if ($request->has('category')) {
            $query->where('category', $request->category);
        }

        $pools = $query->get();

        return response()->json([
            'status' => true,
            'data' => $pools,
        ]);
    }
}
