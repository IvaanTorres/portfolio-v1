<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTech extends Model
{
    use HasFactory;
    protected $table = "project_teches";

    /*
    function __construct($project_id, $tech_id){
      $this->project_id = $project_id;
      $this->tech_id = $tech_id;
    } */
}
