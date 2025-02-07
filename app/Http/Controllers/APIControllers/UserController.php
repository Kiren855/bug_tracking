<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Resources\UserResource;
use App\Models\ProjectMember;
use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function profile()
    {
        $user = JWTAuth::user();
        return new UserResource($user);
    }

    public function index(Request $request)
    {
        $pageSize = $request->page_size ?? 10;

        $user = JWTAuth::user();
        if ($user->role === 'ADMIN') {
            $users = User::query()->paginate($pageSize);
            return UserResource::collection($users);
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }

    public function getUserRole($projectId)
    {
        $user = JWTAuth::user();

        $role = ProjectMember::where('user_id', $user->id)
            ->where('project_id', $projectId)
            ->pluck('role_in_project')
            ->first();

        return response()->json(['role' => $role]);
    }
}
