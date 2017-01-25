<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SingleAd extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="single_ads";
    protected $fillable = ['top_ad','middle_ad','footer_ad'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
