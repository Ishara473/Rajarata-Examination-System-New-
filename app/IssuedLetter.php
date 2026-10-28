<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssuedLetter extends Model
{
    protected $table = 'issued_letters';

    protected $fillable = [
        'student_id', 'issued_by', 'issued_at', 'reference_no', 'type', 'filename'
    ];

    public $timestamps = true;
}
