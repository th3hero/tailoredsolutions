<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyTimeTable extends Model
{
    use HasFactory;
    protected $fillable =[
        'faculty_id','subject_id', 'date', 'session_start_time', 'session_stop_time',
        'duration'
    ];
}
