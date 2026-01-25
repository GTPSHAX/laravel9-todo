<?php

namespace App\Http\Controllers;

use App\Models\InputAspirasi;
use Illuminate\Http\Request;

class InputAspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return InputAspirasi::all();
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
        $inputAspirasi = InputAspirasi::create($request->all());
        return $inputAspirasi;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inputAspirasi = InputAspirasi::findOrFail($id);
        return $inputAspirasi;
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
        $inputAspirasi = InputAspirasi::findOrFail($id);
        $inputAspirasi->update($request->all());

        return $inputAspirasi;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return InputAspirasi::delete($id);
    }
}
