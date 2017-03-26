<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home',[
			'locations'=>Location::all()
		]);
	}

}
