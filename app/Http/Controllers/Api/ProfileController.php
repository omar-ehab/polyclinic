<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;

class ProfileController extends Controller
{
    public function me()
    {
        return response()->json(ProfileResource::make(auth()->user()));
    }
}
