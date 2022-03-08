<?php

namespace App\Models;

use App\Models\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    use HasFactory;
    protected $fillable =[
        'schoolid',
        'className',
        'capacity',
        'type'
    ];

    /**
     * Get the schools that owns the Classes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function School() 
    {
        return $this->belongsTo(School::class);
    }
}
