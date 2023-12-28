<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class employee extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=["username","name","mobile","gender","address","password"];
    protected $table="employees";
}
