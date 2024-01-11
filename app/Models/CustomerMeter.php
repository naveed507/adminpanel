<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerMeter extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function metertype()
    {
        return $this->belongsTo(MeterType::class, 'meter_type_id');
    }
    public function customerdetail()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
