<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Property extends Model
{
    protected $fillable = [
        'type',
        'address',
        'size',
        'bedrooms',
        'price',
        'latitude',
        'longitude',
    ];
    public static function searchWithinRadius($latitude, $longitude, $radius)
    {
        $properties = DB::table('properties')
            ->select('*', DB::raw("
                (6371 * acos(cos(radians($latitude)) 
                * cos(radians(latitude)) 
                * cos(radians(longitude) - radians($longitude)) 
                + sin(radians($latitude)) 
                * sin(radians(latitude)))) AS distance"))
            ->having('distance', '<', $radius) 
            ->orderBy('distance', 'asc')
            ->get();

        return $properties;
    }
}
