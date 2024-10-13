<?php

namespace App\Http\Controllers;

use App\Models\SubFolders;
use Illuminate\Http\Request;

class SubFoldersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subFolders = SubFolders::all();
        return response()->json(['subFolders' => $subFolders], 200);
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
        //
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
        //
    }

    public function getBFolderId($id_folder)
    {
        $subFolders = SubFolders::where('folder_id', $id_folder)
            ->orderBy('updated_at', 'desc')
            ->get();

        if ($subFolders->isEmpty()) {
            return response()->json(['message' => 'No Folder found for the given folder ID'], 404);
        }

        return response()->json(['subFolders' => $subFolders], 200);
    }
}
