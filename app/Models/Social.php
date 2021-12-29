<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    protected $table = "social";

    /* function __construct($name, $link, $user, $src_img){
      $this->name = $name;
      $this->link = $link;
      $this->user = $user;
      $this->src_img = $src_img;
    } */

}
