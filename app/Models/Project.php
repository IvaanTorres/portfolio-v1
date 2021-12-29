<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";

    /* function __construct($name, $description, $link_repo, $isDev, $isMain){
      $this->name = $name;
      $this->description = $description;
      $this->link_repo = $link_repo;
      $this->isDev = $isDev;
      $this->isMain = $isMain;
    } */

    function teches(){
      return $this->belongsToMany(Tech::class, 'project_teches');
    }
}
