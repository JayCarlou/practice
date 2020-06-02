<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'code', 'office_name',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
