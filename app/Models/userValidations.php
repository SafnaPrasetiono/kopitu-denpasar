<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userValidations extends Model
{
    use HasFactory;

    protected $table = 'usersValidations';

    protected $primaryKey = 'id_validations';

    protected $fillable = [
        'email',
        'key',
        'active',
        'user_id',
    ];
}
