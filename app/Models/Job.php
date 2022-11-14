<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table ='jobs';
    protected $fillable =['id','name','code','slug','job_category_id','lt_number','required_number','min_qualification','image','salary','description','form_link','end_date','start_date','status','meta_title','meta_tags','meta_description','created_by','updated_by'];

    public function category(){
        return $this->belongsTo('App\Models\JobCategory','job_category_id','id');
    }

    public function client(){
        return $this->belongsTo('App\Models\Client','client_id','id');
    }
}
