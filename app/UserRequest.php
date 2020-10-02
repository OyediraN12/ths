<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRequest extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'request_type', 'requests', 'status'
    ];
    
    protected $appends = [
        'encoded_Id'
    ];

    /**
     * Getters
     */
    public function getEncodedIdAttribute()
    {
        return encodeId($this->id);
    }

    /**
    * Affliate belongs to  User
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
