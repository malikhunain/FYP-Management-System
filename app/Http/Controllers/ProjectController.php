<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showPhaseData($projectId)
    {
        $project = Project::with('phases.phaseData')->find($projectId);

        // Pass the $project to the view
    }

    public function showPhase($projectId)
    {
        $project = Project::with('phases')->find($projectId);

        // Pass the $project to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Project $project)
    // {
    //     return view('student.project.upload', compact('project'));
    // }

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
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
