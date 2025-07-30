<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('features')->get();

        return response()->json($services);
    }

    public function store(Request $request)
    {
        //
    }
}
