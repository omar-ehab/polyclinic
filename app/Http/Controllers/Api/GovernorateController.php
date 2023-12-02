<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GovernorateResource;
use App\Models\Governorate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class GovernorateController extends Controller
{
    public function index(Request $request)
    {
        $governorates = Cache::rememberForever('governorates', fn () => Governorate::all());
        return response()->json(GovernorateResource::collection($governorates));
    }

    public function show(Governorate $governorate)
    {
        $governorate->load('regions');
        return response()->json(new GovernorateResource($governorate));
    }
}
