<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    use HasFactory;
    protected $fillable=['name','email'];
     public function prize()
     {
         return $this->hasManyThrough(
          '\App\Models\Prize',
          '\App\Models\UserrPrize',
          'userr_id',
          'id',
          'id',
          'prize_id'
         );
     }

}
