<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
     * @OA\GET(
     *     path="/api/user",
     *     tags={"User"},
     *     summary="Get Product List",
     *     description="Get User",
     *     security={{"bearer":{}}},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *            mediaType="application/json",
     *        )
     *    ),
     *     @OA\Response(response=200,description="Get User"),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show()
    {
        $user = User::all();
        return $user;
    }
}
