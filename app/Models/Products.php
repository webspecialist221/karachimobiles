<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="products";
    protected $fillable = ['cat_id','name','description','img','price','three_g','four_g','wifi','camera','bluetooth','fm_radio','os','availiblity','meta_keyword','meta_description'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['cat_id'];
}
