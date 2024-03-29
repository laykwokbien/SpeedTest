<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trains extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function grade(){
        return $this->belongsTo(grade::class, 'grade_id');
    }
}
