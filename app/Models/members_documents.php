<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members_documents extends Model
{
    use HasFactory;
    protected $table = 'members_documents';

    protected $primaryKey = 'id_members_documents';

    protected $fillable = [
        'nik',
        'ktp',
        'members_id',
    ];
}
