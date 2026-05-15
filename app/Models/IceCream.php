<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IceCream extends Model
{
    use HasFactory;



    protected $table = 'ice_creams';

    protected $primaryKey = 'id';



    public $timestamps = false;
}
