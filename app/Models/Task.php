<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Esses são os campos "preenchíveis" do banco.
    // Os demais campos não são alterados pelo usuário, mas sim internamente:
    // id, create_at, updated_at
    protected $fillable = [
        'title', 'text', 'done', 'status'
    ];
}
