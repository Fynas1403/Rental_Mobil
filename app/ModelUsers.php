<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUsers extends Model
{
    protected $table="users";
    protected $primarykey="id";
    public $timestamps=false;

    protected $fillable = [
        'id',
        'name',
        'email',
        // 'password',
        'created_at',
        'updated_at'

    ];
}
