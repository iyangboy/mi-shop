<?php

namespace App\Http\Controllers\ZingFront;

use App\Http\Controllers\Controller;
use App\Http\Requests\Zingfront\WordPairsRequest;
use App\Models\ZingFrontMapTravel;
use Illuminate\Http\Request;

class MapTravelController extends Controller
{
    public function index()
    {
        $province = ZingFrontMapTravel::get();
        return view('zingfront.map_travel', [
            'province' => $province,
        ]);
    }

    public function province()
    {
        return ZingFrontMapTravel::get();
    }

    public function update(Request $request)
    {
        $id      = $request->get('id');
        $remakes = $request->get('remarks');

        ZingFrontMapTravel::where('id', $id)
            ->where('is_travel', '0')
            ->update([
                'is_travel' => 1,
                'remarks'   => $remakes,
            ]);
        return [];
    }
}
