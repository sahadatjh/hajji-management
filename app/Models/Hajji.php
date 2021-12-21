<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hajji extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'spouse_name',
        'occupation',
        'ng_number',
        'tracking_number',
        'pid_number',
        'passport_number',
        'passport_image',
        'visa_number',
        'visa_image',
        'ticket_number',
        'ticket_image',
        'flyte_date',
        'mobile_number',
        'nid_number',
        'date_of_birth',
        'district_id',
        'district',
        'gender',
        'address',
        'package_id',
        'package_price',
        'image',
        'hajji_status',
        'remarks',
        'created_by',
        'updated_by'
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
