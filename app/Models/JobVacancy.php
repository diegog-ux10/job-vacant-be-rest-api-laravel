<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $fillable = ['title', 'description', 'salary', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
