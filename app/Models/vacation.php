<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacation extends Model
{
    use HasFactory;
    protected $primaryKey='TravelId';
    protected $fillable=['title','TravelAddress','price','discount_trip','it_takes_day','departure_date','TravelPicture',];
}
