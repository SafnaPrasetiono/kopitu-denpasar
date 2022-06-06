<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members_categories extends Model
{
    use HasFactory;
    protected $table = 'members_categories';

    protected $primaryKey = 'id_members_categories';

    protected $fillable = [
        'categories',
        'categories_subs',
        'description',
        'categories_id',
        'categories_subs_id',
        'members_id',
    ];
}
