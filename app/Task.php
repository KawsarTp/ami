<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded =[];
    public function teacher(){
    	return $this->belongsTo(Teacher::class);
    }
    public function student(){
    	return $this->belongsTo(Student::class);
    }
}
