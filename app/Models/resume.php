<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    protected $table = 'resume';
    protected $fillable = ['name','email','message'];
    use HasFactory;
}
