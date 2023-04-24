<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourguide extends Model
{
    protected $primaryKey='TourGuideId';
    protected $fillable=['TourGuideName','TourGuideFamily','TourGuideImg','TourGuideAddress','TourGuideEmail','genderName','TourGuideAge'];
}
