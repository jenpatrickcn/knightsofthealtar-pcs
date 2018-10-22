<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'theme',
    ];

    public function getUserTheme($user_id) {
    	if ($this->where('user_id', $user_id)->first()) {
    		return 'testingzxcxczc';
    	}
    	return null;
    }
}
