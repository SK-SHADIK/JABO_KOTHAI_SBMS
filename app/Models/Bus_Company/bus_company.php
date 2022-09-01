<?php

namespace App\Models\Bus_Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus_company extends Model
{
    use HasFactory;
    protected $table = 'buscompany';
    protected $primaryKey='bCom_id';
}
