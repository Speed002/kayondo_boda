<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'initial_deposit',
        'weekly_deposit',
        'agreed_months',
        'total_weeks',
        'selling_price',
        'starting_week',
        'agreement_place',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
