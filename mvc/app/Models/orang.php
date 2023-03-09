<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orang;

class orang extends Model
{
    use HasFactory;
    protected $table ='orang';
    protected $fillable = [
        'nama',
        'kelamin',
        ];
}
