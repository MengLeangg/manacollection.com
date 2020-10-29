<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'province_id',
        'name',
        'created_at',
        'updated_at'
    ];
}
