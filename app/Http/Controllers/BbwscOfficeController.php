<?php

namespace App\Http\Controllers;

use App\Models\BbwscOffice;
use Illuminate\Http\Request;

class BbwscOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $office = BbwscOffice::all();

        $data['office'] = $office;
        
        //isi yang dibawah: folder view, dalem folder bbwsc_office, file index)
        return view('admin.bbwsc_office.index', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bbwsc_office.create');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $office = BbwscOffice::find($id);

        $data['office'] = $office;
        return view('admin.bbwsc_office.edit', $data);
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
        //
    }
}
