<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
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
    public function schools() 
    {
        return $this->belongsTo(schools::class, 'schoolid', 'id');
    }
}
