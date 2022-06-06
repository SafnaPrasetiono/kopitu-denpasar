<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members_permission extends Model
{
    use HasFactory;
    protected $table = 'members_permissions';

    protected $primaryKey = 'id_members_permissions';

    protected $fillable = [
        'ud',
        'siup',
        'halal',
        'bpom',
        'pirt',
        'nib',
        'sku',
        'izin',
        'members_id',
    ];
}
