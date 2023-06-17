<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class BbwscOffice extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'bbwsc_office';
    // protected $fillable = [
    //     'name',
    //     'phone',
    //     'address',
    //     'email',        
    // ];
}
