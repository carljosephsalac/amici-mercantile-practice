<?php

namespace App\Http\Controllers;

use App\Models\Amici;
use Illuminate\Http\Request;

class AmiciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $amicis = Amici::all();

        return view('amicis.index', compact('amicis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('amicis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required|integer'
        ]);

        Amici::create($validated);

        return redirect()->route('amicis.index')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Amici $amici)
    {
        return view('amicis.show', compact('amici'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Amici $amici)
    {
        return view('amicis.edit', compact('amici'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Amici $amici)
    {
        $validated = $request->validate([
            'product_name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required|integer'
        ]);

        $amici->update($validated);

        return redirect()->route('amicis.show', $amici)->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Amici $amici)
    {
        $amici->delete();

        return redirect()->route('amicis.index')->with('success', 'Deleted Successfully');
    }
}
