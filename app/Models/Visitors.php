<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Visitors extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

/**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table='visitors';
    protected $fillable = [
        'id',
        'ip_address',
        'updated_at',
        'created_at',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
