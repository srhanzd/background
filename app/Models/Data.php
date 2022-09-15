<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table="data";
    protected $fillable = [
        'email',
        'updated_at',
        'created_at'
    ];
    protected $hidden = [
        'updated_at',
        'created_at',
    ];
    public $timestamps=true;
}
