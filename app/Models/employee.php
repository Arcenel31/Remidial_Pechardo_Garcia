<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'add',
        'dobirth',
        'contact',
    ];
}
