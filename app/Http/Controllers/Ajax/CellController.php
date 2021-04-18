<?php

namespace App\Http\Controllers\Ajax;

use App\Cell;
use App\Http\Controllers\Controller;
use \Illuminate\Http\JsonResponse;

class CellController extends Controller
{

    /**
     * @param Cell $cell
     * @return JsonResponse
     */
    public function destroy(Cell $cell): JsonResponse
    {
        $cell->update(['url' => null, 'color' => 'primary']);

        return response()->json([], 204);
    }
}
