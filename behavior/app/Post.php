<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    protected $primaryKey = 'id';

    public $timestamps = true;
    //public const CREATED_AT =  'creation_date';
    //public const UPDATE_AT = 'last_update';

    protected $fillable = ['title', 'subtitle', 'description'];
    protected $guarded = [];
}
