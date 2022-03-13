<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassStudents extends Model
{
    use HasFactory;
    protected $fillable =[
        'studentid',
        'classid',
        'grade'
    ];
    public function classes() 
    {
        return $this->belongsTo(classes::class);
    }
}
