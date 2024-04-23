<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use MongoDB\Laravel\Eloquent\Model;

class Product extends Model
{
use HasApiTokens;

protected $primaryKey = '_id';
protected $keyType = 'int';
public $incrementing = true;
protected $connection = 'mongodb';
protected $collection = 'product';
protected $dates = ['deleted_at'];

/**
* The attributes that are mass assignable.
*
* @var array<int, string>
*/
protected $fillable = [

'prodName',
'product_type',
'prod_code',
'Thickness',
'Width',
'ColourName',
'Roll_weight',
];

/**
* The attributes that should be hidden for serialization.
*
* @var array<int, string>
*/
// protected $hidden = [
// 'password',
// 'remember_token',
// ];

/**
* The attributes that should be cast.
*
* @var array<string, string>
*/
// protected $casts = [
// 'email_verified_at' => 'datetime',
// ];
}