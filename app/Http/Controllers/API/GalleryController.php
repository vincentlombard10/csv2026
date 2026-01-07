<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Http\Resources\GalleryResource;
use Illuminate\Http\JsonResponse;
use Statamic\Entries\Entry;

class GalleryController extends Controller
{
    public function getGalleries(int $offset = 0, int $limit = 10): JsonResponse
    {
        $query = Entry::query()
            ->where('collection', 'galleries')
            ->orderBy('published_at', 'desc')
            ->skip($offset)
            ->take($limit)
            ->get();

        return response()->json([
            'events' => GalleryResource::collection($query),
            'offset' => $offset,
            'limit' => $limit
        ]);
    }
}
