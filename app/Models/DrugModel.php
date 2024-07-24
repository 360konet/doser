<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugModel extends Model
{
    use HasFactory;

    protected $table = 'drug';

    protected $fillable = [
        'drug_id',
        'drug_name',
        'morning_dosage',
        'morning_time',
        'afternoon_dosage',
        'afternoon_time',
        'evening_dosage',
        'evening_time'
    ];
}
