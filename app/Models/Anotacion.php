<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anotacion extends Model
{
    use HasFactory;

    protected $table = 'anotaciones';

    protected $fillable = ['titulo', 'contenido', 'tema_id', 'user_id'];

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
