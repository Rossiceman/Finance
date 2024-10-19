<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public $timestamps = false;
   protected $table = "manager";
   protected $primaryKey = "id";
   protected $fillable = [
    "id",
    "userId",
    "pwd"
   ];

   public function getManager($userId,$pwd)
   {
    $manager = self::where("userId",$userId)->where("pwd",$pwd)->first();
    return $manager;
   }

   public static function register($userId,$pwd)
   {
    
    throw new \Exception('test');
   }
}