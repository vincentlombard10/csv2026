<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\RoomResource;
use Illuminate\Http\JsonResponse;
use Statamic\Entries\Entry;

class RoomController extends Controller
{
    public function getRooms(int $offset = 0, int $limit = 10): JsonResponse
    {
        $query = Entry::query()
            ->where('collection', 'rooms')
            ->orderBy('published_at', 'desc')
            ->skip($offset)
            ->take($limit)
            ->get();

        return response()->json([
            'data' => RoomResource::collection($query),
            'offset' => $offset,
            'limit' => $limit
        ]);
    }
}
