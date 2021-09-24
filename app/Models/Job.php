<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable=['school_id','people_id','job'];

    public function person(){
        return $this->belongsTo(Person::class, 'people_id');
    }
    public function school(){
        return $this->belongsTo(School::class);
    }
}