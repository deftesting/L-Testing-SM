<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profile_image(){

        $image_path = ($this->image) ?  $this->image : 'profile/m5DWTYOh3G3pacGIlxQvsqxD6vmMmv0V0SMM6deM.png';

        return '/storage/' . $image_path;
    }

    public function followers(){

        return $this->belongsToMany(User::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
