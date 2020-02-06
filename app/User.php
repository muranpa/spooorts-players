<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'img_name' , 'introduce'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function get()
    {
        $results = Post::all();
        return $results;
    }

    public function toUserId()
    {
        return $this->hasMany('App\Reaction', 'to_user_id', 'id');
    }

    public function fromUserId()
    {
        return $this->hasMany('App\Reaction', 'from_user_id', 'id');
    }

}


