<?php

namespace Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
   
    protected $table = "users";

    protected $fillable = [
        'name', 'email', 'password'
    ];
  
    protected $hidden = [
        'password', 'remember_token',
    ];
  
    public function posts()
    {
        return $this->hasMany(Post::class, 'created_by');
    }
}

?>