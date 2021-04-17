<?php

namespace LaraDev;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = ['title', 'name', 'rental_price', 'sale_price', 'description'];

    public $timestamps = false;
}
