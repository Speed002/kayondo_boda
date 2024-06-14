<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'referee1_name',
        'referee1_relationship',
        'referee1_contact',
        'referee2_name',
        'referee2_relationship',
        'referee2_contact',
        'st_chair_name',
        'st_chair_contact',
        'lc_chair_name',
        'lc_chair_contact',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
