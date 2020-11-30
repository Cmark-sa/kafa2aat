<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "settings";
    protected $fillable = ['logo','site_name','phone','address','facebook_link','twitter_link','instagram_link','contact_email','site_description'];
}
