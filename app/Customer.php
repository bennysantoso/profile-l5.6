<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $table      = 'customers';
    protected $primaryKey = 'customer_id';
    public $timestamps    = true;
    protected $fillable   = [
        'name', 'address', 'register_date',
    ];
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at',
    ];

    //accessors
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    //mutators
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}

