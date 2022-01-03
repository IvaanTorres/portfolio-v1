<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $table = "skills";

    /* function __construct($name, $type, $src_img){
      $this->name = $name;
      $this->type = $type;
      $this->src_img = $src_img;
    } */

    function projects(){
      return $this->belongsToMany(Project::class, 'project_skills');
    }
}
