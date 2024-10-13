<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folders extends Model
{
    use HasFactory;
    protected $table = 'folders';
    protected $fillable = [
        'name_folder',
        'path_folder',
        'ukuran_folder',
    ];
}
