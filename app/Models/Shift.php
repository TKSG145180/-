<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
    use SoftDeletes;
      Protected $fillable = [
        'user_id',
        'date',
        'start_time',
        'end_time',
        ];
        
        
    public function user(){
        return $this->belongsTo(User::class);
    }
     public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
