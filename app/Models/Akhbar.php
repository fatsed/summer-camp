<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akhbar extends Model
{
    protected $fillable = ['Title', 'UploadTime', 'Reference','img','writer'];
}
