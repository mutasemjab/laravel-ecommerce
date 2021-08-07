<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;
    /**
     * @var array
     */
    protected $with=['translations'];


    protected $translatedAttributes=['name'];
    /**
     * @var array
     */
    protected $fillable=['parent_id','slug','is_active'];

    protected $hidden=['translations'];


    /**
     * @var array
     */
    protected $casts=[
        'is_translatable'=>'boolean',
    ];

}
