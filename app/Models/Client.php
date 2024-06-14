<?php

namespace App\Models;

use App\Models\Motor;
use App\Models\Payment;
use App\Models\Referee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dob',
        'contact',
        'nin',
        'residence',
        'stage',
        'doa',
        'occupation',
        'father',
        'father_contact',
        'mother',
        'mother_contact'
    ];


    public function motor(){
        return $this->hasOne(Motor::class);
    }
    public function payment(){
        return $this->hasOne(Payment::class);
    }
    public function referee(){
        return $this->hasOne(Referee::class);
    }
}
