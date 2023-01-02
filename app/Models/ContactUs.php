<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
        'seen',
        'read'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->name = ucwords(strtolower($model->name));
            $model->message = ucwords(strtolower($model->message));
        });
        static::updating(function ($model) {
            $model->name = ucwords(strtolower($model->name));
            $model->message = ucwords(strtolower($model->message));
        });
    }
}
