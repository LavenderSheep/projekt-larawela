<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorSquare extends Model
{
    use HasFactory;
    protected $fillable = ['column', 'row', 'color'];
    public $timestamps = true;

}
