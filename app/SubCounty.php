<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subcounty';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
