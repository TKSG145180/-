<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
      Protected $fillable = [
        'user_id',
        'date',
        'start_time',
        'end_time',
        ];
        
        
    public function users(){
        return $this->belongsTo(User::class);
    }
}
