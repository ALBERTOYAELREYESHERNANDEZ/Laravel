<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estados';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
    protected $attributes = ['POBLACION','NOMBRE','CODIGO'];
}