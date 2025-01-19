<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        if (! $request->user()) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        return response()->json($request->user());
    }
}
