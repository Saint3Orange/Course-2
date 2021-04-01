<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * У нас так по умолчанию,
     * так как все по правилам нейминга Laravel
     */
    public $table = 'tasks';

    /**
     * Тоже так по умолчанию,
     * Ставим false, если нет created_at, updated_at
     */
    public $timestamps = true;

    /**
     * Поля для массового заполнения
     */
    protected $fillable = ['name', 'description', 'user_id'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
