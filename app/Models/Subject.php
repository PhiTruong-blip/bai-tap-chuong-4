<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['subject_name', 'credit'];

    public function students()
    {
        return $this->belongsToMany(Student::class)
                    ->withPivot('score', 'registered_at');
    }
}