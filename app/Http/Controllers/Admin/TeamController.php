<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\DataTables\TeamDataTable;
use App\Http\Controllers\Controller;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TeamDataTable $dataTable)
    {
        return $dataTable->render('admin.team.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'position' => ['required'],
            'image' => ['required'],
        ]);

        $imagePath = handleUpload('image');

        $team = new Team();
        $team->image = $imagePath;
        $team->name = $request->name;
        $team->position = $request->position;

        toastr('Created Successfully!', 'success');

        return redirect()->route('admin.team.index');
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
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'position' => ['required'],
            'image' => ['required'],
        ]);

        $team = Team::findOrFail($id);
        $imagePath = handleUpload('image',$team);

        $team->image =  (!empty($imagePath) ? $imagePath : $team->image);
        $team->name = $request->name;
        $team->position = $request->position;
        $team->save();

        toastr()->success('Our Teams Updated Successfully!', 'Success');

        return redirect()->route('admin.team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
    }
}