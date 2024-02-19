<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
private static $enroll;
    public static function placeOrder($request)

    {
    self::$enroll=new Enroll();
    self::$enroll->user_id=auth()->id();
    self::$enroll->package_id = $request->package_id;
    self::$enroll->payment_method=$request->payment_method;
    self::$enroll->status=1;
    self::$enroll->save();

    }
    public function package(){
        return $this->belongsTo(Package::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
