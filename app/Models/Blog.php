<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
    
    {
        // 
        protected $guarded = ['id'];

        public function posts () {
            
            return $this->hasMany(Post::class);
        }
    }


?>