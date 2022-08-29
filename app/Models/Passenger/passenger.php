<?php

namespace App\Models\Passenger;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    use HasFactory;
    protected $table = 'passenger';
    protected $primaryKey='p_id';
}
