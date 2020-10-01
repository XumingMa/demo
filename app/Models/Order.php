<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $guarded = [
        'id',
        'status',
        'created_at',
        'updated_at'
    ];

    public static $operations = [
        'Pending' => 'btn-light',
        'Assigned' => 'btn-info',
        'On Route' => 'btn-warning',
        'Done' => 'btn-success',
        'Cancelled' => 'btn-danger'
    ];

    public function getStatusAttribute($value) {
        
        $operationKeys = array_keys(self::$operations);
        return  $operationKeys[$value];
    }

}
