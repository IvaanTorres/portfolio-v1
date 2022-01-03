<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::findOrFail(1);
        dd($project->skills);
    }

    public function getMain()
    {
        $project = Project::findOrFail(1);
        dd($project->skills);
    }

    public function getByType()
    {
        $project = Project::findOrFail(1);
        dd($project->skills);
    }

    public function find()
    {
        $project = Project::findOrFail(1);
        dd($project->skills);
    }
}
