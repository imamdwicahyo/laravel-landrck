<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $archive = Archive::all();

        $data['archive'] = $archive;
        return view('archive.index', $data);
        //
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('archive.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Archive::Create([
            'name' => $request->name,
            'type' => $request->type,            
            'consultant' => $request->consultant,
            'contract_number' => $request->contract_number,
            'bbws_office_id' => $request->bbws_office_id

        ]);

        return redirect(route('user.archive.index'));
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
        $archive = Archive::find($id);

        $data['archive'] = $archive;
        return view('archive.edit', $data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $archive = Archive::find($id);

        $archive->name = $request->name;
        $archive->type = $request->type;
        $archive->consultant = $request->consultant;
        $archive->contract_number = $request->contract_number;
        $archive->bbws_office_id = $request->bbws_office_id;       
       
        $archive->save();

        return redirect(route('user.archive.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $archive = Archive::find($id);
        $archive->delete();
        return redirect(route('user.archive.index'));

        // if ($archive) {
        //     $archive->delete();
        // } else {
        //     // Objek tidak ditemukan
        // }
    }
}
