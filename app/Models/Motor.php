<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Motor extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'type',
        'make',
        'registration',
        'color',
        'engine',
        'chasis',
        'condition',
        'registered_names'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
