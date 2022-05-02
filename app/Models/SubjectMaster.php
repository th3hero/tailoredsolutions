<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectMaster extends Model
{
    use HasFactory;
    protected $fillable= [
        'term_id',
        'subject_name'
    ];

    public function term(){
        return $this->belongsTo(Terms::class,'term_id');
    }
}
