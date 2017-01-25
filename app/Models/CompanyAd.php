<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyAd extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="company_ads";
    protected $fillable = ['right_top_ad','right_bottom_ad'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
