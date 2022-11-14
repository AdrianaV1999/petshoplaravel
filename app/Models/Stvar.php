<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stvar extends Model
{
    use HasFactory;

    protected $table = 'stvari';

    protected $fillable = ['naziv' , 'opis', 'cena', 'shopid','userid'];

    public function prodavnica()
    {
        return $this->belongsTo(Shop::class, 'shopid');
    }
    public function korisnik()
    {
        return $this->belongsTo(User::class, 'userid');
    }


}
