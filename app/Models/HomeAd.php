<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAd extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="home_ads";
    protected $fillable = ['middle_ad','footer_ad'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
