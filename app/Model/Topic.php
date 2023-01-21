<?php

namespace App\Model;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{

       
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
           'title' ,'category' , 'skill','difficulty'

        ];
    
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
          
        ];

        public function users(){
          return $this->belongsToMany(User::class,'topic_user','topic_id','user_id');
        }
    
        
    }
       
