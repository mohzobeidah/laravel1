<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table ='offers';
    protected $fillable =['name','price','pic'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=true;
}
