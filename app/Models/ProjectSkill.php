<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSkill extends Model
{
    use HasFactory;
    protected $table = "project_skills";

    /* function __construct($project_id, $skill_id){
      $this->project_id = $project_id;
      $this->skill_id = $skill_id;
    } */
}
