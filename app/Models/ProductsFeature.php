<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsFeature extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="product_features";
    protected $fillable = ['product_id','dimensions_length','dimensions_width','dimensions_depth','weight','color','screen_size_width','screen_size_height','display_size','ringtones','ram','ram_unit','connectivity','primary_camera','secondary_camera','os_name','os_version','processor','battery','frequency','browser','colors','entertainment','other_features','messaging','technology','sim','resolution','status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['product_id'];
}
