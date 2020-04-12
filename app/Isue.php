<?php

namespace App;



use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Isue extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "isue";

     protected $fillable = [
         'id',
        
        'user_id',
        'ComputerLab',
        'machineSerial',
        'hardwareSoftware',
        'type',
        'discription',
        'softwarediscription',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
