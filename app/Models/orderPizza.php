<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderPizza extends Model
{
    //
    use HasFactory;
    protected $table = 'order_pizza';
    protected $primary_key = 'id';
    public $timestamps = true;
}
