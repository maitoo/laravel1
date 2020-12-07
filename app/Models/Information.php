<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $primaryKey = 'serial_number';
    public $incrementing = false;
    protected $fillable =[
        'user_id',
        'store_name',
        'rural_code',
        'area',
        'photo_pass',
        'store_stype',
        'store_information',
        'street_address',
        'url',
        'religion',
        'allergies',
        'store_introduction',
        'flag'
    ];
}
