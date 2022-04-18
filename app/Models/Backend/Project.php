<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    public function header(){

        return $this->hasMany(Header::class,'project_id','id');
        
    }

    public function core(){

        return $this->hasMany(Core::class,'project_id','id');
    }
    public function feature(){

        return $this->hasMany(Feature::class,'project_id','id');
    }
    public function galary(){

        return $this->hasMany(Galary::class,'project_id','id');
    }
    public function service(){

        return $this->hasMany(Service::class,'project_id','id');
    }
    public function slider(){

        return $this->hasMany(Slider::class,'project_id','id');
    }
    
}
