<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table ="admins";
    protected $guarded=[];   // for all columns to be fillable
    public $timestamps = true; // for insert created at / modified at
}
