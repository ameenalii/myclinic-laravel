<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{


    // protected $fillable = ['title', 'company', 'location', 'email', 
    // 'website', 'tags', 'description'];


    use HasFactory;

    public function scopeFilter($query, array $filters){
        
        if($filters['search'] ?? false){
            $query->where('patient_name', 'like', '%'. request('search') . '%')
            -> orWhere('email', 'like', '%'. request('search') . '%')
            -> orWhere('phone', 'like', '%'. request('search') . '%');
        }


        

        // dd($query);
    }

        // Relationship To User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
