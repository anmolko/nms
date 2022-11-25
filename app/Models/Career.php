<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table ='careers';
    protected $fillable =['id','name','open_position','start_date','end_date','form_link','salary','type','created_by','updated_by'];

}
