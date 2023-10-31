<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'birthdate', 'work_experience' , 'job_vacancy_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function job_vacancy()
    {
        return $this->belongsTo(JobVacancy::class);
    }

    use HasFactory;
}
