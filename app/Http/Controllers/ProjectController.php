<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getMain()
    {
      $data = [];
      $data['projects'] = Project::where("isMain", 1)->get();
      foreach ($data['projects'] as $key => $project) {
        $data['projects'][$key]['skills'] = $project->skills;
      }
      return response()->json($data, 200);
    }

    public function getByType($type)
    {
        if($type === "development"){
          $project = Project::where("isDev", 1)->get();
        }else if($type === "design"){
          $project = Project::where("isDev", 0)->get();
        }
        return response()->json($project, 200);
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
