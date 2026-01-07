<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfferResource;
use Illuminate\Http\JsonResponse;
use Statamic\Entries\Entry;

class OfferController extends Controller
{
    public function getOffers(int $offset = 0, int $limit = 10): JsonResponse
    {
        $query = Entry::query()
            ->where('collection', 'offers')
            ->orderBy('published_at', 'desc')
            ->skip($offset)
            ->take($limit)
            ->get();

        return response()->json([
            'data' => OfferResource::collection($query),
            'offset' => $offset,
            'limit' => $limit
        ]);
    }
}
