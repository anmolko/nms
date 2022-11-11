<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    protected $table ='job_categories';
    protected $fillable =['id','name','slug','image','created_by','updated_by'];

    public function demand(){
        return $this->hasMany('App\Models\Job');
    }
}
