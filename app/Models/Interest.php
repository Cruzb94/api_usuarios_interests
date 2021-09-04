<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function users(){
        return $this->belongsToMany('App\Models\User','groups', 'user_id', 'interest_id');

    }
}
