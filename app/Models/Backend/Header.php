<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'image',
        'menu',
        'sub_menu',
       
    ];

    public function project(){

        return $this->belongsTo(Project::class,'project_id','id');
    }
}
