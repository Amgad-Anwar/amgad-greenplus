<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

    /**
     * Gets users except yourself
     *
     * @return JsonResponse
     */
    public function index($id)
    {
        $users = User::where('id',  $id)->first();
        return $users;
    }
}
