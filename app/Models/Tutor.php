<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_number', 'subject', 'rating', 'degree', 'experience'];

    public function scopeFilterByName($query, $name)
    {
        return $query->where('name', 'like', '%' . $name . '%');
    }

    public function scopeFilterBySubject($query, $subject)
    {
        return $query->where('subject', 'like', '%' . $subject . '%');
    }
}
