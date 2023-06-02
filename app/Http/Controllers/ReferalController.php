<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ReferalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $referals = Contact::latest()->paginate(10);
        return view('contact.index', compact('referals'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $referal = Contact::findOrFail($id);
        return view('contact.show', compact('referal'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $referal = Contact::findOrFail($id);
        $referal->delete();
        return redirect()->route('contact.index')->with('success', 'Data referal has been deleted.');
    }
}
