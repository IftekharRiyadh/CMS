<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Committee;

class CommitteeController extends Controller
{
    public function index()
    {
        return Committee::all();
    }

    public function store(Request $request)
    {
        $committee = Committee::create($request->all());
        return response()->json($committee, 201);
    }
}