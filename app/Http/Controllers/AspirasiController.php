<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Aspirasi::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aspirasi = Aspirasi::create($request->all());

        return $aspirasi;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        $aspirasi->update($request->all());

        return $aspirasi;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Aspirasi::delete($id);
    }
}
