<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        $source = $request->input('source');
        $target = $request->input('target');

        $routes = DB::select(DB::raw("SELECT results.*, Sources.name as source_name, Routes.name as route_name
            FROM pgr_ksp(
                'SELECT id, source, target, cost FROM routes',
                :source,
                :target,
                5,
                directed:=false
            ) AS results
            LEFT JOIN locations AS Sources ON Sources.id = results.node
            LEFT JOIN routes as Routes ON results.edge = Routes.id"),
            array(
                'source'=>$source,
                'target'=>$target
            )
        );
        return view('journey',[
            'locations'=>Location::all(),
            'source'=>Location::find($source),
            'target'=>Location::find($target),
            'routes'=>$routes
        ]);
    }
}
