<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    use HasFactory;
    protected $fillable =[
        'image',
        'code'
    ];

    protected $table= "property_images";

    //protected $guarded = [];


}
