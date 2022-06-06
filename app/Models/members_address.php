<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members_address extends Model
{
    use HasFactory;
    protected $table = 'members_address';

    protected $primaryKey = 'id_members_address';

    protected $fillable = [
        'country',
        'province',
        'city',
        'district',
        'village',
        'postal_code',
        'address',
        'id_province',
        'id_regency',
        'id_district',
        'id_village',
        'members_id',
    ];
}
