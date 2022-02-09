<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamus extends Model
{
    use HasFactory;
    protected $table = 'kamus';
    protected $fillable = ['indonesia','allang','kalimat_allang','kalimat_indo','singkatan','audio'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
