<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getMain()
    {
      $projects = Project::where("isMain", 1)->get();
      foreach ($projects as $key => $project) {
        $projects[$key]['skills'] = $project->skills;
      }
      return response()->json($projects, 200);
    }

    public function getByType($type)
    {
        if($type === "development"){
          $projects = Project::where("isDev", 1)->get();
          foreach ($projects as $key => $project) {
            $projects[$key]['skills'] = $project->skills;
          }
        }else if($type === "design"){
          $projects = Project::where("isDev", 0)->get();
          foreach ($projects as $key => $project) {
            $projects[$key]['skills'] = $project->skills;
          }
        }
        return response()->json($projects, 200);
      }

    public function find($type, $id)
    {
      if($type === "development" || $type === "design"){
        $project = Project::findOrFail($id);
        $project['skills'] = $project->skills;
        return response()->json($project, 200);
      }
    }
}
