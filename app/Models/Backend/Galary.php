<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Galary extends Model
{
    use HasFactory;

    protected $fillable =[

        'image',
    ];
    public function project(){

        return $this->belongsTo(Project::class,'project_id','id');
    }
}
