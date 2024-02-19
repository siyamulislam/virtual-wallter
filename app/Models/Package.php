<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\helper\Helper;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'short_description',
        'long_description',
        'image',
        'slug',
        'status',
        'hit_count', // Add hit_count to the $fillable array
    ];

    // Set a default value for hit_count
    protected $attributes = [
        'hit_count' => 0, // Set the default value to 0
    ];

    public static function createOrUpdatePackage($request, $id = null)
    {
        Package::updateOrCreate(['id' => $id], [

            'title' => $request->title,
            'price' => $request->price,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' =>Helper:: uploadFile($request->file('image'),'package',isset($id)?Package::find($id)->image:null),


            'slug' => str_replace(' ','-',$request->title),
        ]);
    }

}
