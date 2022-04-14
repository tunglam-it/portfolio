<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;
    protected $fillable = ['title1','title2','subtitle1','subtitle2','main_img',];

}
