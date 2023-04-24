<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = 'eventId';
    protected $fillable = ['picture', 'title', 'price', 'text'];

}
