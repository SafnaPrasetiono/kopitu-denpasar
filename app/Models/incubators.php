<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incubators extends Model
{
    use HasFactory;
    protected $table = 'incubators';

    protected $primaryKey = 'id_incubators';

    protected $fillable = [
        'code',
        'nik',
        'username',
        'email',
        'born',
        'gender',
        'phone',
        'type',
        'status',
        'avatar',
        'ktp',
        'province',
        'city',
        'district',
        'village',
        'postal_code',
        'address',
        'province_id',
        'regency_id',
        'district_id',
        'village_id',
    ];
}
