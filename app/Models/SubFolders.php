<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubFolders extends Model
{
    use HasFactory;
    protected $table = 'subfolders';
    protected $fillable = [
        'id',
        'folder_id',
        'name_subfolder',
        'path_subfolder',
        'ukuran_subfolder',
    ];
}
