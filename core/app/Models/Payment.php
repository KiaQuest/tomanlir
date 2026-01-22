<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $guarded = ['id'];

    protected $table = 'payments';

    protected $fillable = [
        'user_id',
        'sender_name',
        'amount',
        'time',
        'key'
    ];

    use HasFactory;
}
