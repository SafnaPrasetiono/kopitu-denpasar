<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $primaryKey = 'id_members';

    protected $fillable = [
        'code',
        'username',
        'email',
        'born',
        'gender',
        'phone',
        'class',
        'description',
        'validate',
        'avatar',
    ];
}
