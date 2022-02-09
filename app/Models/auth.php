<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class auth extends Model implements AuthenticatableContract
{
    // use HasFactory;
    use Authenticatable;
    protected $table='akun';
    public $timestamps=false;
    protected $primaryKey ='id';

    // penambahan untuk auth
    protected $guard='login';
    protected $guarded =[];
}
