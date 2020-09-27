<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
   
    protected $table = "posts";
  
    protected $fillable = [
       'title', 'body', 'created_by'
   ];
 }

?>