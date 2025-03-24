<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    //name of table
    protected $table = 'table_user';
    // column sa table
    protected $fillable = [
        'username',
        'password',
        'gender'
    ];
    public $timestamps = false;

    // Explicitly disable timestamp fields
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $primaryKey = 'userid';
    
        // fields must be hidden like password
    // the attribute excluded from the model's JSON form
    protected $hidden = [
        'password'
    ];

}